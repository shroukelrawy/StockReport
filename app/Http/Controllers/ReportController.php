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
        // إجمالي المخزون الحالي
        $currentStock = Product::sum('stock');
        
        // إجمالي المشتريات
        $totalPurchases = Transaction::where('type', 'purchase')->sum('amount');
        
        // إجمالي المبيعات للشهر الحالي والشهر السابق
        $totalSales = Transaction::where('type', 'sell')->whereMonth('created_at', Carbon::now()->month)->sum('amount');
        $previousMonthSales = Transaction::where('type', 'sell')->whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('amount');
        
        // حساب نسبة التغير في المبيعات
        $salesPercentageChange = $previousMonthSales > 0 
            ? (($totalSales - $previousMonthSales) / $previousMonthSales) * 100 
            : 0;
    
        // إجمالي المشتريات للشهر السابق
        $previousMonthPurchases = Transaction::where('type', 'purchase')
            ->whereBetween('created_at', [
                Carbon::now()->subMonth()->startOfMonth(),
                Carbon::now()->subMonth()->endOfMonth()
            ])
            ->sum('amount');
    
        // حساب نسبة التغير في المشتريات
        $purchasesPercentageChange = $previousMonthPurchases > 0 
            ? (($totalPurchases - $previousMonthPurchases) / $previousMonthPurchases) * 100 
            : 0;
    
        // المخزون للشهر السابق
        $previousPurchases = Transaction::where('type', 'purchase')->where('created_at', '<', Carbon::now()->startOfMonth())->sum('amount');
        $previousSales = Transaction::where('type', 'sell')->where('created_at', '<', Carbon::now()->startOfMonth())->sum('amount');
        $previousStock = $previousPurchases - $previousSales;
        $percentageChange = $previousStock > 0 ? (($currentStock - $previousStock) / $previousStock) * 100 : 0;
    
        // تفاصيل المعاملات
        $transactionDetails = Transaction::with('product')->get();
    
        // بيانات الرسم البياني
        $dateLabels = Transaction::selectRaw('DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->pluck('date')
            ->map(fn($date) => Carbon::parse($date)->format('d-m-Y'))
            ->toArray();
    
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
    
        $returnsData = Transaction::whereIn('type', ['sell_return', 'purchase_return'])
            ->selectRaw('SUM(quantity) as quantity, DATE(created_at) as date')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('quantity')
            ->toArray();
        
        // ضبط البيانات لتوافق جميع التواريخ
        $purchaseData = $this->matchDataWithLabels($dateLabels, $purchaseData);
        $salesData = $this->matchDataWithLabels($dateLabels, $salesData);
        $returnsData = $this->matchDataWithLabels($dateLabels, $returnsData);
    
        // تمرير جميع البيانات للعرض
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
