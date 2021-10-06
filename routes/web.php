<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\BeritaController;

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
Route::get('/detail/{id}', [MultimediaController::class, 'Detail']);
//admin

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth',]], function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/', [AdminController::class, 'dashboard']);
   //foto
    Route::get('/tambah-foto', [AdminController::class, 'foto']);
    Route::post('/tambah-foto', [GalleryController::class, 'uploadGallery']);
    Route::get('tambah-foto/delete/{id}', [GalleryController::class, 'Deletet']);
    //team
    Route::get('/create-team', [AdminController::class, 'team']);
    Route::post('/create-team', [TeamController::class, 'uploadteam']);
    Route::get('team/edit/{id}', [TeamController::class, 'Edit']);
    Route::post('team/edit/{id}', [TeamController::class, 'Update']);
    Route::get('team/delete/{id}', [TeamController::class, 'Deletet']);
    Route::get('team/detail/{id}', [TeamController::class, 'Detail']);
    //berita
    Route::get('/create-berita', [MultimediaController::class, 'News']);
    Route::post('/create-berita', [BeritaController::class, 'uploadberita']);
    Route::get('/berita/delete/{id}', [BeritaController::class, 'delete']);


});
