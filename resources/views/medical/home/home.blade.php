@extends('layouts.master-medical-aid')
@section('content')
<div class="c-layout-page">
 @include('medical.home.partials.banner')
 @include('medical.home.partials.ads')
</div>
@endsection

@section('page-script')
<script>
        $(document).ready(function(){
                $('.adverts').slick(
                    {
                        dots: false,
                        arrows: false,
                        speed: 1500,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 5000,                        
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        responsive: [
                            {
                            breakpoint: 1024,
                                settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                                }
                            },
                            {
                            breakpoint: 600,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            },
                            {
                            breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    
                    
              
    });
</script>
@endsection