<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Momoth</title>

    <!-- CSS Links -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="welcome/css/welcome-styles.css" rel="stylesheet">



</head>

<body>
      @yield('loader')
    <!--Preloader End-->
    <!--Wrapper-->
    <div class="wrapper">
        <div class="wrapper-body">
            <!--Container-->
            <div class="container-fluid">

                <!--Logo-->
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive center-block logoimg" src="images/logo.png" alt="logo">
                    </div>
                </div>
                <!--Logo End-->
                <div class="col-xs-12 col-md-6 col-md-offset-3">

                    <div class="conpanies-links">
                        <a href="{{route('medical-aid.home')}}" class="btn btn-sm" type="button"><span>Mamoth Medical Aid Services</span></a>
                        <a  href="{{route('funeral.home')}}" href="#" class="btn btn-sm" type="button"><span>Mamoth Funeral Services</span></a>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--Container End-->

    <!--Footer-->
    <footer class="footer">
        <div>
            <ul class="footer-icons">
                <li><a href="#"><i class="fa fa-facebook footer-ic-color" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter footer-ic-color" aria-hidden="true"></i></a></li>

            </ul>
        </div>
    </footer>
    <!--FooterEnd-->

    </div>
    <!--End Wrapper-->



    <!--Scripts-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 @yield('scripts')


</body>

</html>