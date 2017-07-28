@extends('layouts.master-funeral')
@section('content')    
  @include('medical.partials.inner-page-banner')
    <div class="c-content-box c-size-md c-bg-white find-doctor-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-content-title-1 c-margin-b-20">
                        <h3 class="c-center c-font-uppercase c-font-bold"> Find the Right Plan for You </h3>
                        <div class="c-line-center"></div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class=" c-font-17">
                       Dealing with a loved one’s funeral is difficult enough without having to worry about the cost. We understand how distressing this can be; but we are here to help you every step of the way.   
                    </p>
                   
                </div>
                     <div class="col-xs-12">
                      <p class="margin-bottom-20">
                     <strong>Becoming a member:</strong>
                    </p>
                            <div class="col-sm-6">
                            <ul>
                                <li><strong><small>1. As an individual or family:</small></strong>
                                   <ul class="c-content-list-1 c-theme">
                                        <li>Registration fee is M100 for all options.</li>
                                        <li>Submit main member ID or passport copy.</li>
                                        <li>Submit spouse ID or passport copy.</li>
                                        <li>Submit dependents’ ID or passport copies.</li>
                                    </ul>
                                </li>
                                
                                
                            </ul>
                            
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                <li><strong><small>2. As a society or burial group:</small></strong>
                                   <ul class="c-content-list-1 c-theme">
                                        <li>Registration fee is M100.00 for all options.</li>
                                        <li>Submit rules that govern your society.</li>
                                        <li>Submit passport copies of all society members. </li>
                                    </ul>
                                </li>
                                
                                
                            </ul>
                            </div>
                            <p class="col-xs-12"><a href="{{route('download',['file'=>'funeral-application-form.pdf'])}}">Download application form here</a>, complete and submit it signed, together with the required documents.</p>
                    </div>
            </div>
        </div>
    </div>

@endsection