<?php

use App\Http\Controllers\GestionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Routes;
use App\Http\Controllers\TestMailController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Routes::class, 'index']);
Route::get('/test',[Routes::class, 'test'])->name('home');
// Route::get('/mail',[TestMailController::class, 'test_mail'])->name('send.mail');
Route::get('/contact',[GestionController::class, 'contact'])->name('contact');
Route::post('/contact',[GestionController::class, 'store'])->name('store.message');
Route::get('/dashboard',[MessageController::class, 'dash'])->name('dashboard');
Route::get('/dashboard{id}', [MessageController::class, 'destroy'])->name('delete.message');
Route::get('/dashboard/send_message{id}', [MessageController::class, 'send'])->name('send.message');
Route::post('/dashboard/send_message', [MessageController::class, 'answer'])->name('answer.message');

// Route::get('/dashboard/send_message{id}', [MessageController::class, 'answer'])->name('answer.message');