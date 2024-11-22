<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\textMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomAuthController;
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



/* Route::middleware([textMiddleware::class])->group(function(){
    Route::get('/', function () {
        // \Mail::to("test@gmail.com")->send(new \App\Mail\SendMail());
        // dispatch(new \App\Jobs\SendMailJob());
        return view('welcome');
    });
}); */
Route::get('/', function () {
    // dispatch(new \App\Jobs\SendMailJob(['vijay@gmail.com']));
    return view('welcome');
});
Route::get('/home', [UserController::class,'home']);

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
/* Route::get('home', [HomeController::class,'home']); */
