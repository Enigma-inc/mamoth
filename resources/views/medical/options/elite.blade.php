@extends('layouts.master-medical-aid') 
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')    
        <div class="c-content-box c-size-md c-bg-white benefits-page">
            <div class="container single-plan-options">
                   <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1 c-margin-b-20">
                            <h3 class="c-center c-font-uppercase c-font-bold"> Elite Option</h3>
                            <div class="c-line-center"></div>
                            <p class="c-font-17"></p>
                        </div>
                    </div>
                </div>
           <div class="row list-row">
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/hospitalisation.png')}}">
                 <h2>Hospitalisation</h2>
                </div>
                <div class="details">
                 <p>Subject to Overall Annual Benefit - M1,500.000.00</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/hospital-alternatives.png')}}">
                 <h2>Hospital Alternatives</h2>
                </div>
                <div class="details">
                 <p>M37,333.00</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/paramedical.png')}}">
                 <h2>Paramedical Services</h2>
                </div>
                <div class="details">
                 <p>100% of scheme rates</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/blood-transfusion.png')}}">
                 <h2>Blood Transfusion</h2>
                </div>
                <div class="details">
                 <p>M62,933.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/martenity.png')}}">
                 <h2>Maternity</h2>
                </div>
                <div class="details">
                 <p>12 visits for ante-natal consultations, M41,597.00 for confinement, delivery and specialist fees</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/maxillofacial.png')}}">
                 <h2>Maxillofacial Surgery</h2>
                </div>
                <div class="details">
                 <p>M23,465.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/mental.png')}}">
                 <h2>Mental Health<br> <small>(In Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M28,798.00 per family, 3 days maximum if admitted by GP</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/mental.png')}}">
                 <h2>Mental Health <br> <small>(Out Of Hospital)</small></h2>
                </div>
                <div class="details">
                 <p>M3, 733.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/oncology.png')}}">
                 <h2>Oncology</h2>
                </div>
                <div class="details">
                 <p>M159,990.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/organ-transplant.png')}}">
                 <h2>Organ Transplant</h2>
                </div>
                <div class="details">
                 <p>M159,990.00 per family for tissue and organ transplant, M12,799.00 per family for specialized radiology (MRI & CAT scans)</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/immune-deficiency.png')}}">
                 <h2>Immune Deficiency</h2>
                </div>
                <div class="details">
                 <p>M13,439.00 per beneficiary</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/renal.png')}}">
                 <h2>Renal Dialysis</h2>
                </div>
                <div class="details">
                 <p>M159,990.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/prosthetic.png')}}">
                 <h2>Prosthetic Appliances</h2>
                </div>
                <div class="details">
                 <p>M60,270.00 per family for internal devices surgically implanted and M7, 466.00  per family for external devices</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/consultation.png')}}">
                 <h2>Consultation</h2>
                </div>
                <div class="details">
                 <p>M10,266.00 for General Practitioner services, Alternative Healthcare Practitioners, Medicines, Injections and Pharmacy Advised Therapy</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/chronic.png')}}">
                 <h2>Chronic Benefit</h2>
                </div>
                <div class="details">
                 <p>M6, 776.00 per family</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/dentistry.png')}}">
                 <h2>Dentistry</h2>
                </div>
                <div class="details">
                 <p>M2,386.00 per beneficiary, Basic services like cleaning, extractions & fillings limited to M5,400.00 per family, 
                    M5,650.00 for orthodontic treatment & implants  
                    </p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/optometry.png')}}">
                 <h2>Optometry</h2>
                </div>
                <div class="details">
                 <p>M3,200.00 per beneficiary, 100% of optometry benefit for prescribed lenses, M2,000.00</p>
                
                </div>
            </div>
            <div class="option-container col-xs-12 col-xs-6 col-md-4">
                <div class="header">
                <img class="icon" src="{{asset('medical-aid/images/icons/hospital-alternatives.png')}}">
                 <h2>Pathology, Physical Therapy & Radiology</h2>
                </div>
                <div class="details">
                 <p>M3,768.00 per family</p>
                
                </div>
            </div>
           </div>
   
            </div>




        </div>


</div>
@endsection