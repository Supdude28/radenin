<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Login;
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
        route::get('/loginadmin',[Login::class,'loginadmin']);
        route::post('/loginadmin',[Login::class,'cekloginadmin']);
        route::get('logoutadmin',[Login::class,'logoutadmin']);
    });
    route::get('registrasiadmin',[AdminController::class,'registrasiadmin']);
    route::get('kelas',[AdminController::class,'kelas']);

    route::get('pembayaran',[AdminController::class,'pembayaran']);
    route::get('kantambah',[AdminController::class,'kantambah']);
    route::post('tambahi',[AdminController::class,'tambahi']);
    
    route::get('siswa',[AdminController::class,'datasiswa']);
    
    Route::get('tambahkelas',[AdminController::class,'tambahkelas']);
    Route::post('kelastambah',[AdminController::class,'tambahinkelas']);
    
    route::get('tambahsiswa',[AdminController::class,'tambahsis']);
    Route::post('tambahkan',[AdminController::class,'tambahkan']);
    
    Route::get('petugas',[AdminController::class,'petugass']);
    route::get('petugastambah',[AdminController::class,'petugastambah']);

    route::get('siswaspp',[AdminController::class,'sppsiswa']);

    route::get('tambahspp',[AdminController::class,'tambahspp']);
    route::post('tambahispp',[AdminController::class,'tambahispp']);