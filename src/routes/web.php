<?php

use Illuminate\Support\Facades\Route;

// ContactControllerを使用
use App\Http\Controllers\ContactController;

use App\Http\Controllers\RegisterController;

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



//  /localhost にアクセスしたらContactControllerのindexアクションを起動
Route::get('/', [ContactController::class, 'index']);


//  /localhostにて、確認画面ボタンが押され時にContactControllerのconfurmアクションを起動

Route::post('/confirm', [ContactController::class, 'confirm']);


Route::post('/thanks', [ContactController::class, 'thanks']);





// ここからはRegister

Route::get('/register', [RegisterController::class, 'register']);

Route::post('/login', [RegisterController::class, 'login']);




Route::post('/admin', [RegisterController::class, 'admin']);










