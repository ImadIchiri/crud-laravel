<?php

use App\Http\Controllers\EleveConroller;
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


    Route::get('/', function () {
        return view('welcome');
    });
*/

Route::get('/', [EleveConroller::class, 'index']);
Route::get('/create', [EleveConroller::class, 'create']);
Route::post('/create', [EleveConroller::class, 'store']);
Route::get('/edit/{id}', [EleveConroller::class, 'edit']);
Route::put('/update/{id}', [EleveConroller::class, 'Update']);
Route::get('/delete/{id}', [EleveConroller::class, 'destroy']);
