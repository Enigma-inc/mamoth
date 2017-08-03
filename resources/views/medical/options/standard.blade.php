@extends('layouts.master-medical-aid') 
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')    
        <div class="c-content-box c-size-md c-bg-white benefits-page">
            <div class="container single-plan-options">
                   <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1 c-margin-b-20">
                            <h3 class="c-center c-font-uppercase c-font-bold"> Standard Option</h3>
                            <div class="c-line-center"></div>
                            <p class="c-font-17"></p>
                        </div>
                    </div>
                </div>
           <div class="row list-row">
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-hospitalisation.png')}}">
                 <h2>Hospitalisation</h2>
                </div>
                <div class="details">
                 <p>Subject to Overall Annual Benefit - M550.000.00</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-hospital-alternatives.png')}}">
                 <h2>Hospital Alternatives</h2>
                </div>
                <div class="details">
                 <p>M19,200.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-paramedical.png')}}">
                 <h2>Paramedical Services</h2>
                </div>
                <div class="details">
                 <p>100% of scheme rates</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-blood-transfusion.png')}}">
                 <h2>Blood Transfusion</h2>
                </div>
                <div class="details">
                 <p>M50,133.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-martenity.png')}}">
                 <h2>Maternity</h2>
                </div>
                <div class="details">
                 <p>9 visits for ante-natal consultations, M30,931.00 for confinement, delivery and specialist fees</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-maxillofacial.png')}}">
                 <h2>Maxillofacial Surgery</h2>
                </div>
                <div class="details">
                 <p>M15,999.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-mental.png')}}">
                 <h2>Mental Health<br> <small>(In Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M21,332.00 per family, 3 days maximum if admitted by GP</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-mental.png')}}">
                 <h2>Mental Health <br> <small>(Out Of Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M2,667.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-oncology.png')}}">
                 <h2>Oncology</h2>
                </div>
                <div class="details">
                 <p>M108,793.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-organ-transplant.png')}}">
                 <h2>Organ Transplant</h2>
                </div>
                <div class="details">
                 <p>M108,793.00 per family for tissue and organ transplant, M8,533.00 per family for specialized radiology (MRI & CAT scans)</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-immune-deficiency.png')}}">
                 <h2>Immune Deficiency</h2>
                </div>
                <div class="details">
                 <p>M8,533.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-renal.png')}}">
                 <h2>Renal Dialysis</h2>
                </div>
                <div class="details">
                 <p>M108,793.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-prosthetic.png')}}">
                 <h2>Prosthetic Appliances</h2>
                </div>
                <div class="details">
                 <p>M35,670.00 per family for internal devices surgically implanted and M5,760.00 per family for external devices</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-consultation.png')}}">
                 <h2>Consultation</h2>
                </div>
                <div class="details">
                 <p>M10,266.00 for General Practitioner services, Alternative Healthcare Practitioners, Medicines, Injections and Pharmacy Advised Therapy </p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-chronic.png')}}">
                 <h2>Chronic Benefit</h2>
                </div>
                <div class="details">
                 <p>M4,817.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-dentistry.png')}}">
                 <h2>Dentistry</h2>
                </div>
                <div class="details">
                 <p>M1,791.00 per beneficiary, Basic cleaning, extractions & fillings limited to M4,395.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-optometry.png')}}">
                 <h2>Optometry</h2>
                </div>
                <div class="details">
                 <p>M2,700.00 per beneficiary, 100% of optometry benefit for prescribed lenses, M1,300.00 for frames</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/s-hospital-alternatives.png')}}">
                 <h2>Pathology, Physical Therapy & Radiology</h2>
                </div>
                <div class="details">
                 <p>M2,408.00 per family</p>
                
                </div>
            </div>
           </div>
   
            </div>




        </div>


</div>
@endsection