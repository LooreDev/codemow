<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloresController extends Controller
{
    public function flores(){
        return view('flores');
    }
}
