@extends('layouts.master-medical-aid') 
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Lodge A Claim | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/lodge-claim" />
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
                        <h3 class="c-center c-font-uppercase c-font-bold"> Lodge A Claim </h3>
                        <div class="c-line-center"></div>
                       <p class="c-font-17"> 
                       You can submit your paper claim either by hand or via email to our offices. Submit your claims correctly, to avoid any delays in payment.
                       </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class=" c-font-17">                      
                           Ensure that your claim has the following information:
                            <ul>
                                <li>Membership number</li>
                                <li>Practice number</li>
                                <li>Treatment date</li>
                                <li>Relevant ICD-10 code per claim line</li>
                            </ul>
                    </p>
                    <p>Attach receipt which also reflects your banking details and mark the account as "<strong>Member Refund</strong>".</p>
                   <p>If your claim is approved, you will be refunded directly into your bank account. For this reason, always make sure that we have your correct bank details.
              <br> All claims are emailed to: <a href="mailto:claims@mamothhealth.com">claims@mamothhealth.com</a>
              <p><em > <strong>Note:</strong> You must submit your medical aid claim within four (4) months of the date of treatment. Older claims will be considered expired and will therefore not be paid.</em></p>
</p>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection