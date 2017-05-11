<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalPagesController extends Controller
{
    public function home(){
        return view('medical.home');
    }
}
