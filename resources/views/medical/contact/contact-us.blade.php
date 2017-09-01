 @extends('layouts.master-medical-aid') 
 @section('seo')
    <link rel="canonical" href="http://www.mamoth.co.ls"/>
    <meta property="og:description" content="Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally." />
    <meta property="og:title" content="Contact us | Mamoth" />
    <meta property="og:url" content="http://www.mamoth.co.ls/medical/contact-us" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('medical-aid/images/mamoth-og.jpg')}}" />
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
                                        <p><a href="mailto:info@mamothhealth.com">info@mamothhealth.com</a> <br>
                                            <strong>Tel:</strong> (+266) 22 322 383<br>
                                            <strong>Emergency:</strong> 62 322 383 / 58 882 383<br>
                                            <strong>ER24:</strong> 084 124
                                        </p>
                                    </div>
                                    <div class="">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg margin-top-30">Physical Address</div>
                                            <p class="padding-top-10">Mamoth Employee Benefits (Pty) Ltd <br>
                                                Ground Floor - Moposo House <br>
                                                Kingsway Road<br>
                                                Maseru <br>
                                                Lesotho 
                                             </p>
                                     </div>
                                    <div class="">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg margin-top-30">Postal Address</div>
                                            <p class="padding-top-10">P.O Box 12628<br>
                                                Maseru <br>
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
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.9226548305964!2d27.479561315098102!3d-29.313944382153938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDE4JzUwLjIiUyAyN8KwMjgnNTQuMyJF!5e0!3m2!1sen!2sls!4v1501234156681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                           </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
 </div>
 
 @endsection