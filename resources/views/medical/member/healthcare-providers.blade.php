@extends('layouts.master-medical-aid') 
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Become A Member | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/become-member/healthcare-providers" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
@endsection
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')
    <div class="">
        <div class="c-content-box c-size-md c-bg-white become-member-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-title-1 c-margin-b-20">
                            <h3 class="c-center c-font-uppercase c-font-bold"> Become a member </h3>
                            <div class="c-line-center"></div>
                            <p class="c-font-17">
                              Mamoth Health Plan prides itself in the quality of medical care offered by its Health Care Providers. <br>
                             To be a Health Care provider registered with Mamoth, you will need a practice number issued by Mamoth Employee Benefits.
                              To register for a practice number, visit Mamoth's banking hall with the following: 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wow animate fadeInLeft" style="visibility: visible; animation-name: fadeInLeft; opacity: 1;">
                        <div class="col-xs-12">
                            <ul class="c-content-list-1 c-theme">
                                <li>A certified copy of an official government identity document;</li>
                                <li>A valid Retention certificate issued by the Lesotho Dental and Pharmacy Council; </li>
                                <li>Certified copies of your educational certificate and transcripts;</li>
                                <li>An Application fee of M400.00</li>
                                <li>A completed Board of Health Funders application form obtainable at the Mamoth Employee Benefits Banking Hall in Maseru</li>
                            </ul>
                        </div>
                    </div>
                    <p>To find a Doctor or Healthcare Provider click <a href="{{route('medical-aid.find-doctor')}}">HERE </a></p> 
                </div>
                <div class="row">
                 @include('medical.home.partials.partners')
                 </div>
            </div>
        </div>
    </div>


</div>
@endsection
@section('page-script')

@endsection