<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseControler extends Controller
{
    public function index(){
        return view('layout.layout');
    }
}
