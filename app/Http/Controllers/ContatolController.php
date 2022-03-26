<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatolController extends Controller
{
    public function index()
    {
       return view('contato/index');
    }
}
