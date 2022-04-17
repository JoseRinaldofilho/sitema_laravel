<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //passa parametro opcionais
    public function index(int $id, string $nome)
    {

//        return view('teste/index', ['id' => $id, 'nome' => $nome]); // array associativo
//        return view('teste/index',compact('id','nome')); //compact é um array
        return view('teste/index',)->with('id',$id)->with('nome',$nome); // with é um array

    }
}
