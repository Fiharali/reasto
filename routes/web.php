<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

//////////////////////////////////////////////////////////////////////////////////////

Route::get('redirects',[HomeController::class,'redirects'])->middleware(['auth']);
Route::post('reserva',[AdminController::class,'reserva'])->middleware(['auth']);

////////////////////////////////////////////////////////////////////////////////////////

Route::get('food',[AdminController::class,'food'])->middleware(['auth','Admin']);
Route::get('chefs',[AdminController::class,'chefs'])->middleware(['auth','Admin']);
Route::get('reservation',[AdminController::class,'reservation'])->middleware(['auth','Admin']);
Route::post('uploadfood',[AdminController::class,'uploadfood'])->middleware(['auth','Admin']);
Route::post('chefshow',[AdminController::class,'chefshow'])->middleware(['auth','Admin']);
Route::get('deletefood/{id}',[AdminController::class,'deletefood'])->middleware(['auth','Admin']);
Route::get('updatefood/{id}',[AdminController::class,'updatefood'])->middleware(['auth','Admin']);
Route::post('update/{id}',[AdminController::class,'update'])->middleware(['auth','Admin']);
Route::get('updatechef/{id}',[AdminController::class,'updatechef'])->middleware(['auth','Admin']);
Route::get('deletechef/{id}',[AdminController::class,'deletechef'])->middleware(['auth','Admin']);
Route::Post('updatefoodchef/{id}',[AdminController::class,'updatefoodchef'])->middleware(['auth','Admin']);
Route::get('users',[AdminController::class,'users'])->middleware(['auth','Admin']);
Route::get('deleteuser/{id}',[AdminController::class,'deleteuser'])->middleware(['auth','Admin']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
