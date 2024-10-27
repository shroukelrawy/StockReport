<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

// Route::get('/', function () {
//     return view('test');
// });
Route::get('/reports/stock', [ReportController::class, 'index'])->name('reports.stock');
