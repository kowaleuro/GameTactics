<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NadeController extends Controller
{
    public function showNades(){
        return view('content.nades');
    }
}
