<?php

use App\Http\Controllers\Api\EntityController;
use App\Http\Controllers\Api\AttributeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\EntityOperatorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['prefix' => 'login'],function () {
    Route::post('/', [LoginController::class, 'login'])->name('api.login');
});
Route::group(['prefix' => 'operator', 'middleware' => ['jwt.verify','check.admin']], function() {
    Route::post('/create', [UserController::class, 'create'])->name('operator.create');
    Route::put('/update', [UserController::class, 'update'])->name('operator.update');
    Route::delete('/delete', [UserController::class, 'delete'])->name('operator.delete');
    Route::get('/get', [UserController::class, 'get'])->name('operator.get');
    Route::get('/all', [UserController::class, 'all'])->name('operator.getall');
});

Route::group(['prefix' => 'entity', 'middleware' => ['jwt.verify','check.admin']], function() {
    Route::post('/create', [EntityController::class, 'create'])->name('entity.create');
    Route::put('/update', [EntityController::class, 'update'])->name('entity.update');
    Route::delete('/delete', [EntityController::class, 'delete'])->name('entity.delete');
    Route::get('/get', [EntityController::class, 'get'])->name('entity.get');
    Route::get('/all', [EntityController::class, 'all'])->name('entity.getall');
});

Route::group(['prefix' => 'attribute', 'middleware' => ['jwt.verify','check.admin']], function() {
    Route::post('/create', [AttributeController::class, 'create'])->name('attribute.create');
    Route::put('/update', [AttributeController::class, 'update'])->name('attribute.update');
    Route::delete('/delete', [AttributeController::class, 'delete'])->name('attribute.delete');
    Route::get('/get', [AttributeController::class, 'get'])->name('attribute.get');
    Route::get('/all', [AttributeController::class, 'all'])->name('attribute.getall');
});
    
Route::group(['prefix' => 'entitiyOperator', 'middleware' => ['jwt.verify']], function() {
    //get_all_data_For_entites
    Route::get('/', [EntityOperatorController::class, 'get'])->name('entity.get');
    //get_all_data_For_entites_with_attributes
    Route::get('/all', [EntityOperatorController::class, 'allData'])->name('entity.update');
    //add_attribute_for_entity
    Route::post('/create', [EntityOperatorController::class, 'createAttribute'])->name('attribute.create');
    // custom attributes values
    Route::post('/attribute_value', [EntityOperatorController::class, 'createAttributeValue'])->name('attributevalue.create');
});
