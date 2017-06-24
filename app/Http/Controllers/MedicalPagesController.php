<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalPagesController extends Controller
{
    public function home(){
        return view('medical.home');
    }
    public function becomeMember(){
        return view('medical.become-member.index');
    }
    public function benefits(){
        return view('medical.benefits.benefits');
    }

    public function findDoctor(){
        return view('medical.find-doctor.doctors');
    }
    public function lodgeClaim(){
        return view('medical.claim.lodge-claim');
    }
}
