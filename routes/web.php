<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\GalleryController;
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

Route::get('/', [MultimediaController::class, 'Index']);
Route::get('/detail', [MultimediaController::class, 'Detail']);
//admin

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth',]], function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/tambah-foto', [AdminController::class, 'foto']);
    Route::post('/tambah-foto', [GalleryController::class, 'uploadGallery']);
    Route::get('/tambah-team', [AdminController::class, 'team']);
});
