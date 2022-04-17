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
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->name('site.index');
// Route::get('/principal', [App\Http\Controllers\PrincipalController::class, 'index']);
Route::get('/contato', [App\Http\Controllers\ContatolController::class, 'index'])->name('site.contato');
Route::get('/inicio', [App\Http\Controllers\inicioController::class, 'index'])->name('site.inicio');

Route::get('/login',function(){    return ('login');});

//application
Route::prefix('app')->group(function () {
    Route::get('/clientes',function(){    return ('clientes');})->name('app.clientes');
    Route::get('/fornecedores',function(){    return ('fornecedores');})->name('app.fornecedores');
    Route::get('/produtos',function(){    return ('produtos');})->name('app.produtos');
});















// se quise com parametro opcinais inicio/{id}/{nome?}/{sobrenome?}/{idade?}/{sexo?}
// Route::get('/inicio/{id}/{nome?}/{sobrenome?}/{idade?}/{sexo?}',
//    function($id, $nome, $sobrenome = null, $idade = 41, $sexo = 'Masculino'){
//     return "ID: {$id}<br>Nome: {$nome}<br>Sobrenome: {$sobrenome}<br>Idade: {$idade}<br>Sexo: {$sexo}";
//    }


// )->where('nome', '[A-Za-z]+')->where('sobrenome', '[A-Za-z]+')->where('id', '[0-9]+');
//  // expressiao regular para validar o id



// Route::get('inicio/{id}', function (string $id) {
//     return "O id corresponde a : {$id}";
// });



