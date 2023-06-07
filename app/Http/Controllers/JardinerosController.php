<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JardinerosController extends Controller
{
    public function jardineros(){
        return view('jardineros');
    }
}
