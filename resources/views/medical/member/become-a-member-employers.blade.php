@extends('layouts.master-medical-aid') 
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Become A Member | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/become-member/employers" />
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
                            <p class="c-font-17"> </p>
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
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Select a preferred option for your employees</div>
                             <div class="c-description c-font-17 text-justify">
                            Your employees’ health is important, and you can contribute to their ability to access the best healthcare available when they need it most. Our options include comprehensive healthcare benefits, as well as a suite of tools and services that assist in managing their health.
                            ( <a href="{{route('medical-aid.options.primary')}}">Primary</a> , <a href="{{route('medical-aid.options.standard')}}">Standard</a> , <a href="{{route('medical-aid.options.standard-plus')}}">Standard plus</a> and <a href="{{route('medical-aid.options.elite')}}">Elite</a> ).

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
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Employees to fill application forms and add dependents</div>
                            <div class="c-description c-font-17 text-justify"> 
                           All employees fill in their particulars and those of their dependents (if any).
                            Dependents may be their spouse or partner, children or other members of the family whom the employee is liable for care and support.

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
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Provide certified identity document (ID or Passport) and marriage certificate if applicable</div>
                            <div class="c-description c-font-17 text-justify"> This applies only to members and immediate family dependents. For extended family dependents, an affidavit should be attached to show the relationship of the member to the dependents. 
                            A marriage certificate to be provided in the case where a spouse is covered.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                             <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">4</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Sign a contract with us</div>
                            <div class="c-description c-font-17 text-justify"> 
                            Your contract will be delivered to your offices for signing.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                            <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">5</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Pay your employees’ premium</div>
                            <div class="c-description c-font-17 text-justify"> 
                              All payments must be made directly to our offices, before the 07<sup>th</sup> of every month.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft; opacity: 1;">
                        <div class="c-content-step-1 c-opt-1">
                            <div class="c-icon">
                                <span class="c-hr c-hr-first step-container">
                                            <span class="step">6</span>
                                </span>
                            </div>
                            <div class="c-title c-font-20 c-font-bold c-font-uppercase">Serve waiting period</div>
                            <div class="c-description c-font-17 text-justify"> 
                           If a company covers 30+ employees, they will not be subjected to any waiting period. Maternity will also be covered immediately.
                            <h3 class="text-underline">In special cases such as: </h3>
                              <p>Pre-existing condition – waiting period is 12 - 60 months for a member with a sickness or condition that may be chronic or require surgery.</p>
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