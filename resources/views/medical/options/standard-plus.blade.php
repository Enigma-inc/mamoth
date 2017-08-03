@extends('layouts.master-medical-aid') 
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')    
        <div class="c-content-box c-size-md c-bg-white benefits-page">
            <div class="container single-plan-options">
                   <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1 c-margin-b-20">
                            <h3 class="c-center c-font-uppercase c-font-bold"> Standard Plus Option</h3>
                            <div class="c-line-center"></div>
                            <p class="c-font-17"></p>
                        </div>
                    </div>
                </div>
           <div class="row list-row">
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-hospitalisation.png')}}">
                 <h2>Hospitalisation</h2>
                </div>
                <div class="details">
                 <p>Subject to Overall Annual Benefit - M800.000.00</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-hospital-alternatives.png')}}">
                 <h2>Hospital Alternatives</h2>
                </div>
                <div class="details">
                 <p>M25,600.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-paramedical.png')}}">
                 <h2>Paramedical Services</h2>
                </div>
                <div class="details">
                 <p>100% of scheme rates</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-blood-transfusion.png')}}">
                 <h2>Blood Transfusion</h2>
                </div>
                <div class="details">
                 <p>M50,133.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-martenity.png')}}">
                 <h2>Maternity</h2>
                </div>
                <div class="details">
                 <p>9 visits for ante-natal consultations, M 36,264.00 for confinement, delivery and specialist fees</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-maxillofacial.png')}}">
                 <h2>Maxillofacial Surgery</h2>
                </div>
                <div class="details">
                 <p>M21,332.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-mental.png')}}">
                 <h2>Mental Health<br> <small>(In Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M23,465.00 per family, 3 days maximum if admitted by GP</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-mental.png')}}">
                 <h2>Mental Health <br> <small>(Out Of Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M3,200.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-oncology.png')}}">
                 <h2>Oncology</h2>
                </div>
                <div class="details">
                 <p>M140,791.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-organ-transplant.png')}}">
                 <h2>Organ Transplant</h2>
                </div>
                <div class="details">
                 <p>M140,791.00 per family for tissue and organ transplant, M 9,599.00 for specialized radiology (MRI & CAT scans)</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-immune-deficiency.png')}}">
                 <h2>Immune Deficiency</h2>
                </div>
                <div class="details">
                 <p>M9,599.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-renal.png')}}">
                 <h2>Renal Dialysis</h2>
                </div>
                <div class="details">
                 <p>M140,791.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-prosthetic.png')}}">
                 <h2>Prosthetic Appliances</h2>
                </div>
                <div class="details">
                 <p>M46,740.00 per family for internal devices surgically implanted and M6, 400.00 per family  for external devices</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-consultation.png')}}">
                 <h2>Consultation</h2>
                </div>
                <div class="details">
                 <p></p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-chronic.png')}}">
                 <h2>Chronic Benefit</h2>
                </div>
                <div class="details">
                 <p>M5,981.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-dentistry.png')}}">
                 <h2>Dentistry</h2>
                </div>
                <div class="details">
                 <p>M2,166.00 per beneficiary, Basic cleaning, extractions & fillings limited to M5, 023.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-optometry.png')}}">
                 <h2>Optometry</h2>
                </div>
                <div class="details">
                 <p>M2,900.00 per beneficiary, 100% of optometry benefit for prescribed lenses, M1,600.00 for frames</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/sp-hospital-alternatives.png')}}">
                 <h2>Pathology, Physical Therapy & Radiology</h2>
                </div>
                <div class="details">
                 <p>M2,642.00 per family</p>
                
                </div>
            </div>
           </div>
   
            </div>




        </div>


</div>
@endsection