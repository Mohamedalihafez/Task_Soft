<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\BuildingController;


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



Route::group(['prefix' => 'contact'],function () {
    Route::get('/',[ContactController::class,'index'])->name('contact');
    Route::post('/modify',[ContactController::class,'modify'])->name('contact.modify');
});



Auth::routes();

Route::group(['prefix' => 'home' , 'middleware' => 'web'],function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::post('api/fetch-minor', [BuildingController::class, 'fetchBuilding'])->name('building.fetch');

});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::group(['prefix' => 'advertisement' , 'middleware' => 'web'],function () {
    Route::post('api/fetch-region', [AdvertisementController::class, 'fetchRegion'])->name('region.fetch');
});

Route::group(['prefix' => 'ads-show'],function () {
    Route::get('/all',[AdvertisementController::class,'all'])->name('advertisement.all');
    Route::get('/show/{advertisement?}',[AdvertisementController::class,'show'])->name('advertisement.show');
});

