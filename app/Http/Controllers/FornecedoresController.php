<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class,'index'])->name('fornecedores.index');
 
class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3'];

        echo view('fornecedores.index', compact('fornecedores'));
    }


}
