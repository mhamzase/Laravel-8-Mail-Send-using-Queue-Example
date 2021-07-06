<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;

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

Route::get('email-test', function(){
  
    $details['email'] = 'mhamzasulehri143@gmail.com';
  
    dispatch(new SendEmailJob($details));
  
    dd('Send Email Successfully');
});
