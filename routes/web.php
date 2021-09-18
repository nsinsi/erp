<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RequisitionController;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\ProjectController;
Use App\Http\Controllers\payabletoController;
Use App\Http\Controllers\LeaveController;
Use App\Http\Controllers\ItemController;
Use App\Http\Controllers\SupplierController;
Use App\Http\Controllers\DistrictController;

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


Auth::routes();
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {

  Route::resource('/', HomeController::class);

  Route::resource('roles', RoleController::class);

  Route::resource('users', UserController::class);
  Route::get('search', [SearchController::class, 'search']);
  Route::get('profile', [UserController::class, 'profile']);

  Route::resource('projects',ProjectController::class);

  Route::resource('leave',LeaveController::class);
  Route::resource('item',ItemController::class);
  Route::resource('supplier',SupplierController::class);
    Route::resource('district',DistrictController::class);




  Route::resource('payableto',payabletoController::class);


  Route::resource('requisitions', RequisitionController::class);
  // Route::get('search', [RequisitionController::class, 'search']);



  Route::get('requisitions.download{id}',[RequisitionController::class,'print'])->name('requisitions.download');

});
Route::view('barcode', 'barcode');

Route::get('qr-code-g', function () {



  \QrCode::size(500)

  ->format('png')

  ->generate('ItSolutionStuff.com', public_path('assets/images/qrcode.png'));



  return view('barcode');



});

Route::get('dropdownlist/getbudgetlines/{id}',[ProjectController::class, 'getBudgetLines'])->name('budgetlines');
