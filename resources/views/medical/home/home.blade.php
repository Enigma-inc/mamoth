@extends('layouts.master-medical-aid')
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Mamoth Health Plan" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/home" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
@endsection
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