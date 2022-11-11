<?php

use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripeController;
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



Route::get('/',[StripeController::class,'Stripe']);
Route::post('stripe',[StripeController::class,'stripePyament']);


Route::get('facebook',[FaceBookController::class,'loginUsingFacebook']);
Route::get('fbres',[FaceBookController::class,'fbres']);

Route::get('google',[FaceBookController::class,'loginUsingGoogle']);
Route::get('googleres',[FaceBookController::class,'googleres']);

Route::get('sendbasicemail',[MailController::class,'basic_email']);