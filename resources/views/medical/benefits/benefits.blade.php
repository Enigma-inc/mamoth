@extends('layouts.master-medical-aid') 
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')
    <div class="">
        <div class="c-content-box c-size-md c-bg-white benefits-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1 c-margin-b-20">
                            <h3 class="c-center c-font-uppercase c-font-bold"> Discover Benefits </h3>
                            <div class="c-line-center"></div>
                            <p class="c-font-17"> In addressing health care and healthy lifestyles, we do not just offer medical aid options, we
                                offer unique value-added and comprehensive benefits.</p>
                        </div>
                    </div>
                </div>

                <div class="c-content-accordion-1">
                    <div class="panel-group" id="accordion-2" role="tablist">
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingOne-1">
                                <h4 class="panel-title">
                                    <a class="c-font-bold c-font-19 padding-top-10 padding-bottom-10" data-toggle="collapse" data-parent="#accordion-2" href="#day-to-day" aria-expanded="true"
                                        aria-controls="collapseOne">
                                                    <i class="fa fa-bars"></i> Day-to-day Benefits </a>
                                </h4>
                            </div>
                            <div id="day-to-day" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-1" aria-expanded="true">
                                <div class="panel-body c-font-18 margin-top-20">
                                    <div class="row day-to-day">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/consultation.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Consultation</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>Covers general practitioners, specialists, remedial therapies, alternative
                                                        healthcare practitioners, medicines & injections and pharmacy advised
                                                        therapy.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/chronic.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Chronic Benefit</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>Comprehensive disease list. Subject to registration on Relive Managed
                                                        Care Programme.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/dentistry.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Dentistry</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>Basic cleaning, extractions, fillings, advanced orthodontic treatment,
                                                        implants etc.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/optometry.png?v=1')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Optometry</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>Includes prescribed lenses and frames. It is a biannual benefit.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingTwo-1">
                                <h4 class="panel-title">
                                    <a class="c-font-bold c-font-19 collapsed padding-top-10 padding-bottom-10" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                                    <i class="fa fa-bars"></i> Major Medical Benefits (Paid at 100% of scheme rates) </a>
                                </h4>
                            </div>
                            <div id="collapseTwo-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-1" aria-expanded="false"
                                style="height: 0px;">
                                <div class="panel-body c-font-18 margin-top-20">
                                    <div class="row major-benefits">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/blood-transfusion.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Blood Transfusion</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>This covers blood, blood equivalents & products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/hospitalisation.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Hospitalisation</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>This includes general ward, high care, ICU, Theatre fees and surgical
                                                        procedures </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/blood-transfusion.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Hospital Alternatives</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>These include physical rehabilitation, sub-acute facilities, and hospice
                                                        & nursing services</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/immune-deficiency.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Immune Deficiency</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>Anti-retroviral, related medicines & pathology. Subject to registration
                                                        on Relive Managed Care programme.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/martenity.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Maternity</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        We will be with you through the incredible months of your baby’s development, and you will have access to ante-natal consultations
                                                        and 2x2D scans; confinement, delivery and specialist fees will
                                                        be covered.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/maxillofacial.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Maxillofacial Surgery</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                    This is non-elective, covers dental/oral surgery.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/mental.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Mental Health <small style="color:#fff;">(In and Out of Hospital)</small></h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        This is for a maximum of three (3) days if admitted by a GP.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/oncology.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Oncology</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        This includes radiotherapy, chemotherapy, related radiology & pathology.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/organ-transplant.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Organ Transplant</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        Tissue and organ transplant, pathology, radiology, physical therapy ad specialized radiology (MRI, CAT scans)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/paramedical.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Paramedical Services</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        Services such as road transport emergencies, Lesotho Ambulance Service Network/ER24
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/prosthetic.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Prosthetic Appliances</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        Covers internal devices surgically implanted, external devices and oxygen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="benefit-container">
                                                <div class="header">
                                                    <img class="icon" src="{{asset('medical-aid/images/icons/renal.png')}}" alt="benefit">
                                                    <div class="text">
                                                        <h2>Renal Dialysis</h2>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <p>
                                                        Acute or chronic
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>


</div>
@endsection