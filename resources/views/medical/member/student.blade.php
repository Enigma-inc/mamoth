@extends('layouts.master-medical-aid') 
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
                                Join the Mamoth family to experience “home away from home”, while studying abroad. Our affordable healthcare cover will give you access to quality services, and ensure that you focus on your studies. To qualify for the student medical aid, you must not be aged above twenty-six (26). 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow animate fadeInLeft" style="visibility: visible; animation-name: fadeInLeft; opacity: 1;">
                        <div class="col-xs-12 c-font-21">
                            Submit the following documents:
                        </div>
                        <div class="col-xs-12">
                            <ul class="c-content-list-1 c-theme">
                                <li>Admission Letter</li>
                                <li>Identity document</li>
                                <li>Pay annual premium</li>
                            </ul>
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