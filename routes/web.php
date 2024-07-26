<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\transaction\dealApprovalController;
use App\Http\Controllers\auth\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [loginController::class, 'login'])->name('login');

Route::prefix('admin')->group(function() {
    Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('admin.dashboard');

    // TRANSACTION
    Route::get('transaction/deal-approval', [dealApprovalController::class, 'dealApproval'])->name('admin.transaction.dealapproval');

});
