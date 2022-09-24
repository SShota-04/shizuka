<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tests/test', [TestController::class,'index']);

//Route::get('/contact/index', [App\Http\Controllers\ContactFormController::class, 'index']);

Route::group(['prefix' => 'contact','middleware' => 'auth'], function(){
    Route::get('index', [App\Http\Controllers\ContactFormController::class, 'index'])->name('contact.index');
    Route::get('create', [App\Http\Controllers\ContactFormController::class, 'create'])->name('contact.create');
    Route::post('store', [App\Http\Controllers\ContactFormController::class, 'store'])->name('contact.store');
    Route::get('show/{id}', [App\Http\Controllers\ContactFormController::class, 'show'])->name('contact.show');
    Route::get('edit/{id}', [App\Http\Controllers\ContactFormController::class, 'edit'])->name('contact.edit');
    Route::post('update/{id}', [App\Http\Controllers\ContactFormController::class, 'update'])->name('contact.update');
    Route::post('destroy/{id}', [App\Http\Controllers\ContactFormController::class, 'destroy'])->name('contact.destroy');

    Route::get('result', [ResultController::class, 'currentLocation'])->name('contact.currentLocation');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
