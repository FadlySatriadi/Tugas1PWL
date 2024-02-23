<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BevController extends Controller 
{  
    public function index() { 
        return view('menu'); 
    }   
}
