<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class MedicalPagesController extends Controller
{
    public function home()
    {
        return view('medical.home.home');
    }
    public function about(){
        return view('medical.about.about')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function contact(){
        return view('medical.contact.contact-us')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function options(){
        return view('medical.options.plan-options')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function optionsPrimary(){
        return view('medical.options.primary')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function standard(){
        return view('medical.options.standard')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function elite(){
        return view('medical.options.elite')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function standardPlus(){
        return view('medical.options.standard-plus')->with(['headerImage'=>$this->getRandomHeaderImage()]);
    }
    public function becomeMember($type)
    {
   
        if ($type== 'student') {
             return view('medical.member.student')->with(['headerImage'=>$this->getRandomHeaderImage()]);
        } 
        else if ($type=='healthcare-providers') {
             return view('medical.member.healthcare-providers')->with(['headerImage'=>$this->getRandomHeaderImage()]);
        } 
        else if ($type=='employers') {
             return view('medical.member.become-a-member-employers')->with(['headerImage'=>$this->getRandomHeaderImage()]);
        } 
        else {
             return view('medical.member.become-a-member')->with(['headerImage'=>$this->getRandomHeaderImage()]);
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
            return 'medical-aid/images/headers/header-'.rand(1, $fileCount).'.jpg';
        }
        //if there no files then return this
        return 'header-1.jpg';
    }
    
    public function download($fileName)
    {
        $filePath = public_path() . "/docs/" . $fileName;
       // dd(file_exists($filePath));
        if( file_exists($filePath)){
            $headers = array(
                'Content-Type: application/pdf',
            );
            return \Response::download($filePath, $fileName,$headers);
        }
        else{
            return back();
        }

    }
}
