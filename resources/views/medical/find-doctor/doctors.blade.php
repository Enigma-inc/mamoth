@extends('layouts.master-medical-aid') 
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Find A Doctor | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/find-doctor" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
@endsection
@section('content')
<div class="c-layout-page">
    @include('medical.partials.inner-page-banner')
<div class="">
    <div class="c-content-box c-size-md c-bg-white find-doctor-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-content-title-1 c-margin-b-20">
                        <h3 class="c-center c-font-uppercase c-font-bold"> Find A Doctor </h3>
                        <div class="c-line-center"></div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class=" c-font-17">
                        For the past years, we have steadily broadened our horizons in contracting health care practitioners and hospital networks;
                        to ensure that you can access medical services, pharmacies and doctors in Lesotho and abroad. No
                        prior arrangements are to be made with us, except for hospital admissions. Immediate benefits confirmation
                        will be done while you wait at the point of service.
                    </p>
                    <p class="margin-bottom-20">
                    Need to find a doctor or specialist? No matter what plan you are on, no prior arrangements are to be made with us, except for hospital admissions. Immediate benefits confirmation will be done while you wait at the point of service.
                    </p>
                </div>
                <div class="c-content-panel col-md-6">
                    <div class="c-label country-label">Lesotho</div>
                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="c-content-list-1 c-theme">
                                    <li>Private Medical Practitioners</li>
                                    <li>Christian Health Association of Lesotho (CHAL) Hospitals</li>
                                    <li>Network of Pharmaceutical Services</li>
                                    <li>Lesotho Ambulance Network</li>
                                   
                                </ul>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="c-content-panel col-md-6">
                    <div class="c-label country-label">South Africa</div>
                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="c-content-list-1 c-theme">
                                    <li>Medi-clinic</li>
                                    <li>Netcare</li>
                                    <li>LifeHealthCare</li>
                                    <li>National Hospital Network (NHN)</li>
                                    <li>ER24</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection