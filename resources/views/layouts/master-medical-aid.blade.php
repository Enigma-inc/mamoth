<!DOCTYPE html>
<!--[if IE 9]> 
<html lang="en" class="ie9 no-js">
    <![endif]-->
    <!--[if !IE]><!-->
<html lang="en">
        <!--<![endif]-->
  <head>
<meta charset="utf-8"/>
    <title>Mamoth Medical Aid</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
 <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="{{asset('medical-aid/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="{{asset('medical-aid/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{asset('medical-aid/assets/base/css/plugins.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/base/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css" />
        <link href="{{asset('medical-aid/assets/base/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="{{asset('medical-aid/assets/base/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('libs/slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('libs/slick/slick-theme.css')}}"/>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        </head>
 </head>


  
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen medical-aid-page">
<div class="row">
   @include('medical.partials.header')
   @yield('content')
   @include('social-media')
</div>
        
        <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
           <div class="container">
                <div class="c-prefooter c-bg-white">
                    <div class="c-body">
                    </div>
                   <!-- <div class="c-line"></div>-->
                    <div class="c-foot">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">About
                                        <span class="c-theme-font">MAMOTH</span>
                                    </h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-text c-font-16 c-font-regular">
                              Mamoth Health Plan is a medical aid product of Mamoth Employee Benefits. Established in 2003, Mamoth Health Plan is the leading Medical Aid Service Provider in Lesotho that offers health care services locally and regionally. 
                                </p>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Subscribe to our News & Events</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <form action="#">
                                    <div class="input-group input-group-lg c-square">
                                        <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme" placeholder="Your Email Here" />
                                        <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="c-postfooter c-bg-purple">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">2017 &copy; MAMOTH
                                <span class="c-font-grey">All Rights Reserved.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../{{asset('medical-aid/assets/global/plugins/excanvas.min.js')}}"></script> 
	<![endif]-->
        <script src="{{asset('medical-aid/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/base/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="{{asset('medical-aid/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="{{asset('medical-aid/assets/base/js/components.js')}}" type="text/javascript"></script>
        <script src="{{asset('medical-aid/assets/base/js/app.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <script type="text/javascript" src="{{asset('libs/slick/slick.min.js')}}"></script>
        @yield('page-script')
    </body>



</html>