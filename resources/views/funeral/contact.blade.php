@extends('layouts.master-funeral')
@section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls/funeral/home"/>
    <meta property="og:description" content="Mamothe Funeral Home is the premium funeral service provider in the Kingdom of Lesotho." />
    <meta property="og:title" content="Contact us | Mamothe Funeral Home" />
    <meta property="og:url" content="http://www.mamoth.co.ls/funeral/contact-us" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('funeral/images/mamothe-og.jpg')}}" />
@endsection
 @section('content')
    @include('medical.partials.inner-page-banner')
 
 <div class="c-layout-page">
 
     <div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="c-content-title-1 c-margin-t-50">
                                <h3 class="c-center c-font-uppercase c-font-bold"> Contact Us</h3>
                                <div class="c-line-center"></div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-contact-1 c-opt-1">
                        <div class="row" data-auto-height=".c-height">
                          <div class="col-sm-4">
                                <div class="">
                                    <div >
                                        <p>
                                        {{--  <a href="mailto:info@mamothhealth.com">info@mamothhealth.com</a> <br>  --}}
                                            <strong>Tel:</strong> <a href="tel:+266 2234 7180">+266 2234 7180 </a> <br>
                                            <strong>Cell:</strong> <a href="tel:+266 63635681">+266 6363 5681 </a> <br>
                                            <a class="margin-left-30" href="tel:+266 63642120">+266 6364 2120</a> <br>
                                            <a class="margin-left-30" href="tel:+266 53157437">+266 5315 7437</a>
                                        </p>
                                    </div>
                                    <div class="">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg margin-top-30">Physical Address</div>
                                            <p class="padding-top-10">
                                            Nazareth, <br>
                                            Ha Phaloane, <br>
                                            Maseru, <br>
                                            Lesotho.
                                             </p>
                                     </div>
                                    <div class="">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg margin-top-30">Postal Address</div>
                                            <p class="padding-top-10">
                                            Mamothe Funeral Home <br>
                                            P.O Box 48,<br>
                                            Machache 130,<br>
                                            Lesotho

                                                
                                             </p>
                                     </div>
                                    <div class="">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg ">Social</div>
                                        <br>
                                        <ul class="c-content-iconlist-1 c-theme class="padding-bottom-10"">
                                            <li>
                                                <a href="https://twitter.com/mamothlife" target="_blank">
                                                    <i class="fa fa-twitter" ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/mamothlife" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                             <li>
                                                <a href="https://www.youtube.com/channel/UC_FjPv2rm1iER7BpDTlBvaA" target="_blank">
                                                    <i class="fa fa-youtube-play"></i>
                                                </a>
                                            </li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 c-desktop">
                            <div class="resposive-iframe">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.9226548305964!2d27.7318!3d-29.4211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDE4JzUwLjIiUyAyN8KwMjgnNTQuMyJF!5e0!3m2!1sen!2sls!4v1501234156681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                           </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
 </div>
 
 @endsection