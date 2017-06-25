@extends('layouts.master-medical-aid') @section('content')
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
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <h1>Submitting a claim:</h1>
                    <p class=" c-font-17">
                      
                            Please make sure that your paper claim has at least the following information:
                            <ul>
                                <li>Membership number</li>
                                <li>Practice number</li>
                                <li>Treatment date</li>
                                <li>Relevant ICD-10 code per claim line</li>
                            </ul>
                    </p>
                    <p>Send the claim to <a href="mailto:claims@mamothhealth.com">claims@mamothhealth.com</a></p>
                    <p>If your healthcare professional or the hospital claims on your behalf:</p>
                    <p>Usually, your healthcare professional will send your medical aid claim to us on your behalf, so you don’t need to claim as well. If your healthcare professional tells you that they haven’t been paid, you can check your claims status on <a target="_blank" href="www.fedhealth.co.za ">www.fedhealth.co.za </a>
                      or contact us on <a href="tel:0860 002 153">0860 002 153</a>.</p>
                      <p>If your healthcare professional doesn’t claim on your behalf, or if you’ve already paid, you must send us the following:</p>
                      <p>Proof of payment. <br>
                        The medical aid claim (the account). Make sure the account shows your membership number, the practice number, the ICD10 and procedure codes.<br>
                        If we approve the claim, we’ll refund you directly into your bank account. For this reason, always make sure that we have your correct bank details. To update them, call us on 0860 002 153 or email fedhealth@medscheme.co.za.
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