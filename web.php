<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', [ApiController::class, 'index']);
Route::get('/home', [ApiController::class, 'home']);
Route::get('/getmember', [ApiController::class, 'apigetMember'])->name('getmember');
Route::post('/login', [ApiController::class, 'apiLogin']);
Route::get('/logout', [ApiController::class, 'apiLogout']);
Route::get('/register', [ApiController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [ApiController::class, 'apiRegister'])->name('submitRegister');
Route::get('/search', [ApiController::class, 'apigetMember'])->name('search');
Route::get('/edit/{id}', [ApiController::class, 'apiGetEditMember'])->name('editmember');
Route::put('/edit/{id}', [ApiController::class, 'apiUpdateMember']);
Route::get('/delete/{id}', [ApiController::class, 'apiDeleteMember']);