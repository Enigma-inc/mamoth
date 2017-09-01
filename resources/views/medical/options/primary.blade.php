@extends('layouts.master-medical-aid') 
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Primary Option | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/options/primary" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
@endsection
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')    
        <div class="c-content-box c-size-md c-bg-white benefits-page">
            <div class="container single-plan-options">
                   <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1 c-margin-b-20">
                            <h3 class="c-center c-font-uppercase c-font-bold"> Primary Option</h3>
                            <div class="c-line-center"></div>
                            <p class="c-font-17"></p>
                        </div>
                    </div>
                </div>
           <div class="row list-row">
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-hospitalisation.png')}}">
                 <h2>Hospitalisation</h2>
                </div>
                <div class="details">
                 <p>Subject to Overall Annual Benefit - M400.000.00</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-hospital-alternatives.png')}}">
                 <h2>Hospital Alternatives</h2>
                </div>
                <div class="details">
                 <p>M14,933.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-paramedical.png')}}">
                 <h2>Paramedical Services</h2>
                </div>
                <div class="details">
                 <p>100% of scheme rates</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-blood-transfusion.png')}}">
                 <h2>Blood Transfusion</h2>
                </div>
                <div class="details">
                 <p>M19,200.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-martenity.png')}}">
                 <h2>Maternity</h2>
                </div>
                <div class="details">
                 <p>7 visits for ante-natal consultations, M26,665.00 for confinement, delivery and specialist fees</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-maxillofacial.png')}}">
                 <h2>Maxillofacial Surgery</h2>
                </div>
                <div class="details">
                 <p>M10,700.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-mental.png')}}">
                 <h2>Mental Health<br> <small>(In Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M14,932.00 per family, 3 days maximum if admitted by GP</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-mental.png')}}">
                 <h2>Mental Health <br> <small>(Out Of Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M2,133.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-oncology.png')}}">
                 <h2>Oncology</h2>
                </div>
                <div class="details">
                 <p>M89,594.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-organ-transplant.png')}}">
                 <h2>Organ Transplant</h2>
                </div>
                <div class="details">
                 <p>M89,594.00 per family for tissue and organ transplant, M6,400.00 per family for specialized radiology (MRI & CAT scans)</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-immune-deficiency.png')}}">
                 <h2>Immune Deficiency</h2>
                </div>
                <div class="details">
                 <p>M6,400.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-renal.png')}}">
                 <h2>Renal Dialysis</h2>
                </div>
                <div class="details">
                 <p>M 89,594.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-prosthetic.png')}}">
                 <h2>Prosthetic Appliances</h2>
                </div>
                <div class="details">
                 <p>M19,680.00 per family for internal devices surgically implanted and M3,413.00 per family for external devices</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-consultation.png')}}">
                 <h2>Consultation</h2>
                </div>
                <div class="details">
                 <p>M5,424.00 for General Practitioner services, Alternative Healthcare Practitioners, Medicines, Injections and Pharmacy Advised Therapy </p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-chronic.png')}}">
                 <h2>Chronic Benefit</h2>
                </div>
                <div class="details">
                 <p>Subject to Consultation limit</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-dentistry.png')}}">
                 <h2>Dentistry</h2>
                </div>
                <div class="details">
                 <p>M1,256.00 per beneficiary, Basic cleaning, extractions & fillings limited to M3,265.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-optometry.png')}}">
                 <h2>Optometry</h2>
                </div>
                <div class="details">
                 <p>M1,800.00 per beneficiary, 100% of optometry benefit for prescribed lenses, M1,000.00 for frames</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/primary-hospital-alternatives.png')}}">
                 <h2>Pathology, Physical Therapy & Radiology</h2>
                </div>
                <div class="details">
                 <p>M2,130.00 per family</p>
                
                </div>
            </div>
           </div>
   
            </div>




        </div>


</div>
@endsection