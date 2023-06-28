<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::resource('/admin/categories', 'AdminCategoriesController', ['names'=>[
        'index'=>'admin.categories.index',
        'edit'=>'admin.categories.edit'
    ]]);
    Route::resource('/admin/abouts', 'AdminAboutsController', ['names'=>[
        'index'=>'admin.abouts.index',
        'edit'=>'admin.abouts.edit'
    ]]);
    Route::resource('/admin/services', 'AdminServicesController', ['names'=>[
        'index'=>'admin.services.index',
        'edit'=>'admin.services.edit'
    ]]);
    Route::resource('/admin/gallaries', 'AdminGallariesController', ['names'=>[
        'index'=>'admin.gallaries.index',
        'edit'=>'admin.gallaries.edit'
    ]]);
    Route::resource('/admin/socials', 'AdminSocialsController', ['names'=>[
        'index'=>'admin.socials.index',
        'edit'=>'admin.socials.edit'
    ]]);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
