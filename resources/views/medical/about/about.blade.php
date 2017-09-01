@extends('layouts.master-medical-aid') 
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="About | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/about-us" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
@endsection
@section('content')    
  @include('medical.partials.inner-page-banner')
    <div class="c-content-box c-size-md c-bg-white find-doctor-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-content-title-1 c-margin-b-20">
                        <h3 class="c-center c-font-uppercase c-font-bold"> About Mamoth</h3>
                        <div class="c-line-center"></div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class=" c-font-17">
                      Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally. 
                    </p>
                   
                </div>
                <div class="col-xs-12">
                      <p class="margin-bottom-20">
                     <strong>Group Vision</strong>
                    </p>
                     <p class=" c-font-17">
                      Re bo mampoli! Re aha leruo le uena. 
                      <strong style="color:#c92a8c;font-size:24px; font-weight:700">|</strong> 
                      We are the champions! Creating wealth with you.

                    </p>
                </div>
                <div class="col-xs-12">
                      <p class="margin-bottom-20">
                     <strong>Group Mission</strong>
                    </p>
                     <p class=" c-font-17">
                     We innovate and integrate systems to maximize wealth, 
                     thus responding efficiently and effectively to the evolving needs of our clients.

                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection