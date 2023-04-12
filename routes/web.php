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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/',[HomeController::class,"index"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class,"index"])->name('dashboard');
});
route::get('/redirects',[HomeController::class,"redirects"]);
route::get('/view_pengajuan',[AdminController::class,"view_pengajuan"]);

route::get('/view_tracking',[AdminController::class,"view_tracking"]);
route::get('/delete_tracking/{id}',[AdminController::class,"delete_tracking"]);
route::get('/update_tracking/{id}',[AdminController::class,"update_tracking"]);
route::post('/add_pengajuan',[AdminController::class,"add_pengajuan"]);
route::post('/update_tracking_confirm/{id}',[AdminController::class,"update_tracking_confirm"]);


