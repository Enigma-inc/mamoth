<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuneralPagesController extends Controller
{
    function home(){
        return view('funeral.home');
    }
}
