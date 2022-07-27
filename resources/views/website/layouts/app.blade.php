<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="SHESCUBA - Multipurpose scuba diving, sea adventure, traveler &amp; Travel agent HTML template" name="description">
    <meta content="SHESCUBA" name="author">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/logo.png')}}" type="image/x-icon" />

    <title>SHESCUBA</title>

    <!--Bootstrap-->
    <link href=" {{asset('assets/stylesheets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--Font Style-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic,300italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

    <!-- font-awesome.css -->
    <link href=" {{asset('assets/stylesheets/css/fontawesome/font-awesome.css')}}" rel="stylesheet">

    <!--JQuery-->
    <script src=" {{asset('assets/javascripts/jquery.min.js')}}"></script>

    <!-- Slick -->
    <link href=" {{asset('assets/stylesheets/css/slick/slick.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/stylesheets/css/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- pe-icon.css -->
    <link href=" {{asset('assets/stylesheets/css/pe-icon-7-stroke/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/stylesheets/css/pe-icon-7-stroke/helper.css')}}" rel="stylesheet">

    <!-- animate.css -->
    <link href=" {{asset('assets/stylesheets/css/animate.css')}}" rel="stylesheet">

    <!-- vanillabox -->
    <link href=" {{asset('assets/stylesheets/css/vanillabox/vanillabox.css')}}" rel="stylesheet">

    <!-- Color Scheming Style -->
    <link href=" {{asset('assets/stylesheets/css/colors/blue.css')}}" id="switch_style" rel="stylesheet">

    <!-- User Defined Style -->
    <link href=" {{asset('assets/stylesheets/css/components.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/stylesheets/css/style.css')}}" rel="stylesheet">

</head>

<body class="navbar-fixed">
    <div class="preloader">
        <div class="image-container">
            <div class="image"><img src=" {{asset('assets/images/preloader.gif')}}" alt=""></div>
        </div>
    </div>
    <!-- Navbar Start -->
    <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top megamenu">
            <div class="top-content">
                <div class="container">
                    <ul>
                        <li>
                            <i class="pe-7s-map-marker"></i>
                            Jalan Palapa XIII no.3 Sidakarya Denpasar Selatan Bali - Indonesia
                        </li>
                        <li>
                            <i class="pe-7s-call"></i>
                            +62 821 6572 6769
                        </li>
                        <li>
                            <i class="pe-7s-mail"></i>
                            <a href="mailto:shescuba.indonesia@gmail.com" class="__cf_email__">[email&#160;protected]</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Navbar Begin -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand no-effect" href="{{route('index')}}"><img src=" {{asset('assets/images/favicon/logo-2.png')}}" alt=""></a>
                </div>
                <!--/.navbar-header -->
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="{{route('index')}}" class="dropdown-toggle">HOME </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">DIVE COURSE <b class="caret"></b></a>
                            <ul class="dropdown-menu small-dropdown-menu">
                                <li class="dropdown-list-wrap">
                                    <ul class="col-sm-12 no-l-padding dropdown-list titled list-unstyled">
                                        <li>
                                            <p><strong>DIVE COURSE</strong></p>
                                        </li>
                                        @foreach($divecourses as $divecourse)
                                        <li><a href="{{route('divecourse',$divecourse->id)}}">{{$divecourse->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--/.dropdown -->
                        <li class="dropdown">
                            <a href="{{route('divetrip')}}" class="dropdown-toggle">DIVE TRIPS </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('contact')}}" class="dropdown-toggle">CONTACT US </a>
                        </li>
                        <!--/.dropdown -->
                        <!-- <li class="cart">
                            <a href="shop-cart.html">
                                <i class="pe-7s-cart"></i>
                                <div class="number"><span>3</span></div>
                            </a>
                        </li> -->
                    </ul>
                    <!--/.navbar-nav -->
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav><!-- /.megamenu -->
    </div>
    <!-- Navbar End -->

    @yield('content')


    <a href="https://api.whatsapp.com/send?phone=6281236246911" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Footer Begin -->
    <footer>

        <div class="copyright col-md-12 no-h-padding">
            <div class="left-section col-md-6 col-sm-6"></div>
            <div class="container content-wrap">
                <div class="content">
                    <div class="col-md-6 col-sm-6 col-xs-6 left-content">&copy; All Right Reserved Shescuba</div>
                    <div class="col-md-6 col-sm-6 col-xs-6  right-content text-right">
                        <div class="social-media">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.content -->
            </div>
            <!--/.content-wrap -->
        </div>
        <!--/.copyright -->
    </footer>
    <!-- Footer End -->

    <!-- JavaScripts -->
    <script src=" {{asset('assets/javascripts/bootstrap.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/wow.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/slick.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/typed.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/smoothproducts.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/jquery.countTo.js')}}"></script>
    <script src=" {{asset('assets/javascripts/jquery.parallax.js')}}"></script>
    <script src=" {{asset('assets/javascripts/jquery.appear.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/isotope.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/masonry.min.js')}}"></script>
    <script src=" {{asset('assets/javascripts/imagesLoaded.js')}}"></script>
    <script src=" {{asset('assets/javascripts/jquery.downCount.js')}}"></script>
    <script src=" {{asset('assets/javascripts/jquery.vanillabox.js')}}"></script>
    <script src=" {{asset('assets/javascripts/modernizr.js')}}"></script>
    <script src=" {{asset('assets/javascripts/custom.js')}}"></script>
</body>

<!-- Mirrored from demo.suavedigital.com/sail/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jun 2022 02:54:21 GMT -->

</html>