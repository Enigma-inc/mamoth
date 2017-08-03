@extends('layouts.master-medical-aid') @section('content')
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
                            <p class="c-font-17"> With a variety of comprehensive benefits available, it is not difficult to spot those that definitely touch on your unique health needs.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow animate fadeInLeft" style="visibility: visible; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1 options">
                            <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">1</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Select your preferred option </div>
                            <div class="c-description padding-0">
                                <div id="options">
                                    <div>
                                    <a href="{{route('medical-aid.options.elite')}}">
                                        <img class="member-option" src="http://localhost:8000/medical-aid/images/options/elite.png" alt="Elite Option">
                                    </a>
                                    </div>
                                    <div>
                                    <a href="{{route('medical-aid.options.standard-plus')}}">
                                        <img class="member-option" src="http://localhost:8000/medical-aid/images/options/standard-plus.png" alt="standard plus">
                                    </a>
                                    </div>
                                    <div>
                                    <a href="{{route('medical-aid.options.standard')}}">
                                        <img class="member-option" src="http://localhost:8000/medical-aid/images/options/standard.png" alt="standard">
                                    </a>
                                    </div>
                                    <div>
                                    <a href="{{route('medical-aid.options.primary')}}">
                                        <img class="member-option" src="http://localhost:8000/medical-aid/images/options/primary.png" alt="primary">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow animate fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                             <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">2</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Fill Application Form</div>
                            <div class="c-description c-font-17 text-justify"> 
                            Upon deciding on a suitable option, download form here and fill in your particulars and those of your dependents (if any).
                             Dependents may be your spouse or partner, children or other members of the family whom the member is liable for care and support.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                            <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">3</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Provide certified identity document (ID or Passport),</div>
                            <div class="c-description c-font-17 text-justify"> This applies only to members and immediate family dependents. For extended family dependents, an affidavit should be attached to show the relationship of the member to the dependents.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow animate fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                             <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">4</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Pay your premium</div>
                            <div class="c-description c-font-17 text-justify"> 
                            All payments must be made directly to our offices, before the 07<sup>th</sup> of every month.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                            <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">5</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Serve waiting period</div>
                            <div class="c-description c-font-17 text-justify"> 
                            A member who has never belonged to any medical aid, or has been inactive from any medical aid cover for three (3) months and above, is subjected to general waiting period of 3 months after joining, and therefore not covered if need to make a medical claim arises.
                            <h3 class="text-underline">Special cases:</h3>
                            <ul class="c-content-list-1 c-theme c-separator-dot">
                                <li>Pregnancy – 9 months for a member who is already pregnant,</li>
                                <li>Pre-existing condition – 12 - 60 months for a member with a sickness or condition that may be chronic or require surgery.</li>
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
@section('page-script')
<script>
        $(document).ready(function(){
                $('#options').slick(
                    {
                        dots: false,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 5000,
                    }
                );
    });
</script>
@endsection