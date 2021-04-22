<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\MailController; 
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LocalizationController; 
 

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



Route::get('/login', function () {
    return view('login');
}); 

    Route::get('/login', function () {
        return view('login');
    }); 

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect ('login'); 
});
Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("/add_to_cart",[ProductController::class,'addToCart']);
Route::get("/cartlist",[ProductController::class,'cartList']);
Route::get("/removecart/{id} ",[ProductController::class,'removeCart']);
Route::get("/ordernow",[ProductController::class,'orderNow']);
Route::post("/orderplace",[ProductController::class,'orderPlace']);
Route::get("/myorders",[ProductController::class,'myOrders']);
Route::get('/sendemail', [MailController::class,'index']);
Route::post('/sendemail/send', [MailController::class,'send']);
Route::get('/{lang}', [LocalizationController::class, 'index']);
