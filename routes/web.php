<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// route::get('dashboard',[AdminController::class,'dashboard']);

// route::get('login',[AdminController::class,'signin']);

route::prefix('adminspp')->group(function(){
    Route::get('/',[AdminController::class,'dashboard']);
        route::get('/loginadmin',[AdminController::class,'loginadmin']);
        route::post('/loginadmin',[AdminController::class,'cekloginadmin']);
        route::get('logoutadmin',[AdminController::class,'logoutadmin']);
    });
    route::get('registrasiadmin',[AdminController::class,'registrasiadmin']);