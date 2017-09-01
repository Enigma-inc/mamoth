@extends('layouts.master-medical-aid')
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Options | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/options/standard-plus" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
@endsection
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')
     @section('content')
        
 <div class="c-content-box c-size-md c-bg-parallax options-container padding-0">
                <div class="bg-color">
                <div class="container">
                    <div class="c-content-app-1 options">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-center c-font-bold">Options</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                          <div class="benefits">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 margin-top-10"> <img src="{{asset('medical-aid/images/options/elite.png')}}" alt="Elite Option"></div>
                            <div class="col-xs-12 col-md-6 margin-top-10"> <img src="{{asset('medical-aid/images/options/standard-plus.png')}}" alt="Elite Option"></div>
                        </div>
                        <div class="row margin-top-10">
                            <div class="col-xs-12 col-md-6 margin-top-10"> <img src="{{asset('medical-aid/images/options/standard.png')}}" alt="Elite Option"></div>
                            <div class="col-xs-12 col-md-6 margin-top-10"> <img src="{{asset('medical-aid/images/options/primary.png')}}" alt="Elite Option"></div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
   
@endsection
</div>
