<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CaptchaValidationController;
 use App\Http\Controllers\EmailController;
 

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


Route::get("send-email", [EmailController::class, "sendEmail"]);


//captchas
Route::get('contact-form-captcha', [CaptchaValidationController::class, 'index']);
Route::post('captcha-validation', [CaptchaValidationController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [CaptchaValidationController::class, 'reloadCaptcha']);

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', function () {
    return view('impresiones-index');
});
 
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
