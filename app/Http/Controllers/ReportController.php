<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use DB;


class ReportController extends Controller
{
    public function index()
    {
        $currentStock = Product::sum('stock');
        
        // Total purchases
        $totalPurchases = Transaction::where('type', 'purchase')->sum('amount');
        
        // Current and previous month's sales data
        $totalSales = Transaction::where('type', 'sell')->whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $previousMonthSales = Transaction::where('type', 'sell')->whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('amount');
        
        // Calculate percentage change for total sales
        $salesPercentageChange = $previousMonthSales > 0 
            ? (($totalSales - $previousMonthSales) / $previousMonthSales) * 100 
            : 0;
    
        // Previous month purchases
        $previousMonthPurchases = Transaction::where('type', 'purchase')
            ->whereBetween('created_at', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ])
            ->sum('amount');
    
        // Calculate the percentage change for purchases
        $purchasesPercentageChange = $previousMonthPurchases > 0 
            ? (($totalPurchases - $previousMonthPurchases) / $previousMonthPurchases) * 100 
            : 0;
    
        // Other necessary data
        $previousPurchases = Transaction::where('type', 'purchase')->where('created_at', '<', Carbon::now()->startOfMonth())->sum('amount');
        $previousSales = Transaction::where('type', 'sell')->where('created_at', '<', Carbon::now()->startOfMonth())->sum('amount');
        $previousStock = $previousPurchases - $previousSales;
        $percentageChange = $previousStock > 0 ? (($currentStock - $previousStock) / $previousStock) * 100 : 0;
    
        // Get transaction details
        $transactionDetails = Transaction::with('product')->get();
    
        // Data for charts
        $dateLabels = Transaction::selectRaw('DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('date')->toArray();
    
        $purchaseData = Transaction::where('type', 'purchase')
            ->selectRaw('SUM(quantity) as quantity, DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('quantity')
            ->toArray();
    
        $salesData = Transaction::where('type', 'sell')
            ->selectRaw('SUM(quantity) as quantity, DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('quantity')
            ->toArray();
    
        $returnsData = Transaction::where('type', 'return')
            ->selectRaw('SUM(quantity) as quantity, DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('quantity')
            ->toArray();
    
        // Pass all calculated data to the view
        return view('reports.stock', compact(
            'currentStock', 
            'previousStock', 
            'percentageChange', 
            'totalSales', 
            'salesPercentageChange', 
            'totalPurchases', 
            'dateLabels', 
            'purchaseData', 
            'salesData', 
            'returnsData',
            'purchasesPercentageChange',
            'transactionDetails' 
        ));
    }
    
    private function matchDataWithLabels($labels, $data)
    {
        $result = [];
        foreach ($labels as $label) {
            $result[] = in_array($label, $data) ? $data[array_search($label, $data)] : 0;
        }
        return $result;
    }
}
