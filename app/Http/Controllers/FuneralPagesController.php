<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuneralPagesController extends Controller
{
    public function home()
    {
        return view('funeral.home');
    }
    
    public function about()
    {
        return view('funeral.about')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }

    public function plans(){
        return view('funeral.plans')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function becomeMember(){
        return view('funeral.become-member')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function benefits(){
        return view('funeral.benefits')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function claim(){
        return view('funeral.claim')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function contact(){
        return view('funeral.contact')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }


    private function getRandomHeaderImage()
    {
        $files=glob('funeral/images/headers/header-*.jpg');
        if ($files!==false) {
            $fileCount=count($files);
            
            return 'funeral/images/headers/header-'.rand(1, $fileCount).'.jpg';
        }
        //if there no files then return this
        return 'header-1.jpg';
    }


}
