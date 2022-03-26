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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\inicioController::class, 'index']);
Route::get('/principal', [App\Http\Controllers\PrincipalController::class, 'index']);
Route::get('/contato', [App\Http\Controllers\ContatolController::class, 'index']);
Route::get('/inicio', [App\Http\Controllers\inicioController::class, 'index']);

Route::get('inicio/{id}', function (string $id) {
    return "O id corresponde a : {$id}";
});



