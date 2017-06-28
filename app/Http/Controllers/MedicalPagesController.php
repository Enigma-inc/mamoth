<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalPagesController extends Controller
{
    public function home()
    {
        return view('medical.home');
    }
    public function becomeMember($type)
    {
   
        if ($type== 'student') {
             return view('medical.member.student')->with(['headerImage'=>$this->getRandomHeaderImage()]);
        } else {
             return view('medical.become-a-member')->with(['headerImage'=>$this->getRandomHeaderImage()]);
        }
    }

    public function benefits()
    {
        return view('medical.benefits.benefits')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }

    public function findDoctor()
    {
        return view('medical.find-doctor.doctors')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function lodgeClaim()
    {
        return view('medical.claim.lodge-claim')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }

    private function getRandomHeaderImage()
    {
        $files=glob('medical-aid/images/headers/header-*.jpg');
        if ($files!==false) {
            $fileCount=count($files);
            return 'header-'.rand(1, $fileCount).'.jpg';
        }
        //if there no files then return this
        return 'header-1.jpg';
    }
}
