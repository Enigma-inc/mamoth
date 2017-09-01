@extends('layouts.master-funeral')
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls/funeral/home"/>
    <meta property="og:description" content="Mamothe Funeral Home is the premium funeral service provider in the Kingdom of Lesotho." />
    <meta property="og:title" content="About | Mamothe Funeral Home" />
    <meta property="og:url" content="http://www.mamoth.co.ls/funeral/about-us" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('funeral/images/mamothe-og.jpg')}}" />
@endsection
@section('content')    
  @include('medical.partials.inner-page-banner')
    <div class="c-content-box c-size-md c-bg-white find-doctor-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-content-title-1 c-margin-b-20">
                        <h3 class="c-center c-font-uppercase c-font-bold"> About Mamothe</h3>
                        <div class="c-line-center"></div>
                        <p> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class=" c-font-17">
                       Mamothe Funeral Home is the premium funeral service provider in the Kingdom of Lesotho. Using the most advanced technology, we offer highly dignified mortuary services,
                        broad selection of caskets and coffins and comprehensive burial services.
                    </p>
                   
                </div>
                     <div class="col-xs-12">
                      <p class="margin-bottom-20">
                     <strong>We provide the following services:</strong>
                    </p>
                            <ul class="c-content-list-1 c-theme">
                                <li>Mortuary service</li>
                                <li>Caskets and coffins</li>
                                <li>Burial services</li>
                            </ul>
                        </div>
            </div>
        </div>
    </div>

@endsection