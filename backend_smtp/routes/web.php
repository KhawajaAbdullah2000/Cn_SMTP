<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Email_Controller;
use App\Http\Controllers\ImapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('log');
});

Route::get('send_mail_view',[Email_Controller::class,'send_mail_view']);

Route::post('send_mail_view',[Email_Controller::class,'send_email']);
Route::post('',[Email_Controller::class,'login']);
Route::get('logout',[Email_Controller::class,'logout']);
Route::get('receive_view',function(){
    return view('receive_view');
});
Route::post('receive_view',[ImapController::class,'receive_view_form']);
