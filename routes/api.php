<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlapitvanyController;
use App\Http\Controllers\AdomanyozoController;
use App\Http\Controllers\AdomanyController;
use App\Http\Controllers\AnyagController;
use App\Http\Controllers\AdomanyNevController;
use App\Http\Controllers\KiszallitasController;
use App\Http\Controllers\EmberController;

Route::get('/ember',[EmberController::class,'index']);

//---Alapitvany---
Route::get('/alapitvany',[AlapitvanyController::class,'index']);
Route::post('/alapitvany/{id}',[AlapitvanyController::class,'store']);
Route::put('/alapitvany/{id}',[AlapitvanyController::class,'update']);
Route::delete('/alapitvany/{id}',[AlapitvanyController::class,'destroy']);
Route::get('/alapitvany/{id}',[AlapitvanyController::class,'getById']);
Route::get('/alapitvany/filter/{ember}',[AlapitvanyController::class,'filterBy']);

//---Adomanyozo---
Route::get('/adomanyozo', [AdomanyozoController::class, 'index']);
Route::post('/adomanyozo/{id}', [AdomanyozoController::class, 'store']);
Route::put('/adomanyozo/{id}', [AdomanyozoController::class, 'update']);
Route::delete('/adomanyozo/{id}', [AdomanyozoController::class, 'destroy']);
Route::get('/adomanyozo/{id}',[AdomanyozoController::class,'getById']);


//---Adomany---
Route::get('/adomany',[AdomanyController::class,'index']);
Route::post('/adomany/{id}', [AdomanyController::class, 'store']);
Route::put('/adomany/{id}', [AdomanyController::class, 'update']);
Route::delete('/adomany/{id}', [AdomanyController::class, 'destroy']);
Route::get('/adomany/{id}',[AdomanyController::class,'getById']);

//---Anyag---
Route::get('/anyag', [AnyagController::class, 'index']);
Route::post('/anyag/{id}', [AnyagController::class, 'store']);
Route::put('/anyag/{id}', [AnyagController::class, 'update']);
Route::delete('/anyag/{id}', [AnyagController::class, 'destroy']);
Route::get('/anyag/{id}',[AnyagController::class,'getById']);


//---AdomanyNev---
Route::get('/adomanynev', [AdomanyNevController::class, 'index']);
Route::post('/adomanynev/{id}', [AdomanyNevController::class, 'store']);
Route::put('/adomanynev/{id}', [AdomanyNevController::class, 'update']);
Route::delete('/adomanynev/{id}', [AdomanyNevController::class, 'destroy']);
Route::get('/adomanynev/{id}',[AdomanyNevController::class,'getById']);


//---Kiszallitas---
Route::get('/kiszallitas', [KiszallitasController::class, 'index']);
Route::post('/kiszallitas/{id}', [KiszallitasController::class, 'store']);
Route::put('/kiszallitas/{id}', [KiszallitasController::class, 'update']);
Route::delete('/kiszallitas/{id}', [KiszallitasController::class, 'destroy']);
Route::get('/kiszallitas/{id}', [KiszallitasController::class, 'getById']);