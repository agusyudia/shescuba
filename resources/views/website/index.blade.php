@extends('website.layouts.app')

@section('content')

<!-- Banner Begin -->
<section class="banner carousel slide" id="banner-carousel">
    <div class="carousel-inner">

        <div class="item parallax-section active" style="background-image: url(assets/images/banner1.jpg); background-size:cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="content-wrap valign-wrap">

                    <div class="content valign-bottom col-md-6">
                        <div class="image-content">
                            <div class="underlined-heading top animated fadeInLeft wow" data-wow-delay="0.5s">
                                <img src=" {{asset('assets/images/favicon/logo-3.png')}}" width="100%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="content valign-middle col-md-6">
                        <div class="text-content">
                            <div class="underlined-heading top animated fadeInLeft wow" data-wow-delay="0.5s">
                                <h1>About</h1>
                                <h2>SHESCUBA</h2>
                            </div>
                            <div class="banner-description animated fadeIn wow" data-wow-delay="1.5s">
                                <h3>SHESCUBA is operated by two passionate female Scuba drivers who has an impressive resume for underwater and marine life. Shescuba is our best seller small group diving program that prioritizes both safety and pleasure.
                                </h3>
                            </div>
                            <div class="button-wrap animated fadeIn wow" data-wow-delay="2s">
                                <a href="" class="def-btn btn-outline">About Us</a>
                            </div>
                        </div>
                        <!--/.textwrap -->
                    </div>
                </div>
                <!--/.content-wrap -->
            </div>
            <!--/.container -->
        </div>
        <!--/.item -->

        <div class="item parallax-section" style="background-image: url(assets/images/banner3.jpg); background-size:cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="content-wrap valign-wrap">
                    <div class="content valign-middle col-md-2">
                        <div class="text-content">
                            <div class="underlined-heading top animated fadeInLeft wow" data-wow-delay="0.5s">
                                <img src=" {{asset('assets/images/favicon/logo-3.png')}}" width="50%" alt="">
                            </div>
                            <div class="underlined-heading top animated fadeInLeft wow" data-wow-delay="0.5s">
                                <h2>Indonesia</h2>
                            </div>
                            <div class="banner-description animated fadeIn wow" data-wow-delay="1.5s">
                                <h3>Indonesia is one of the world’s largest archipelago countries with more than 17.000 islands lie across its land. The country is passed by the Equator line that makes the land is famous for its rich sunny days. The beauty of Indonesia’s islands and its fantastic weather are recognized worldwide for being the paradise of underwater tourist destination.</h3>
                            </div>
                            <div class="button-wrap animated fadeIn wow" data-wow-delay="2s">
                                <a href="about-us.html" class="def-btn btn-outline">Read More</a>
                            </div>
                        </div>
                        <!--/.textwrap -->
                    </div>
                    <div class="content valign-bottom col-md-4">
                        <div class="image-content">
                            <div class="image animated fadeIn wow" data-wow-delay="1s">
                                <img src=" {{asset('assets/images/map_diving_indonesia.jpg')}}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.content-wrap -->
            </div>
            <!--/.container -->
        </div>
        <!--/.item -->

        <div class="item parallax-section" style="background-image: url(assets/images/banner3.jpg); background-size:cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="content-wrap valign-wrap">
                    @foreach($teams as $team)
                    <div class="content valign-bottom col-md-6">
                        <div class="image-content">
                            <div class="underlined-heading top animated fadeInLeft wow" data-wow-delay="0.5s">
                                <img src="{{asset('upload/team/'.$team->image)}}" width="100%" alt="">
                            </div>
                        </div>
                        <div class="text-content">
                            <div class="underlined-heading top animated fadeInLeft wow" data-wow-delay="0.5s">
                                <h4>{{$team->name}}</h4>
                            </div>
                            <div class="banner-description animated fadeIn wow" data-wow-delay="1.5s">
                                <h3>{{$team->description}}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--/.content-wrap -->
            </div>
            <!--/.container -->
        </div>
        <!--/.item -->

    </div>
    <!--/.carousel-inner -->

    <!-- Controls -->
    <a class="left carousel-control" href="#banner-carousel" role="button" data-slide="prev">
        <div class="control left">
            <div class="shape"><i class="fa fa-angle-left"></i></div>
        </div>
    </a>
    <a class="right carousel-control" href="#banner-carousel" role="button" data-slide="next">
        <div class="control right">
            <div class="shape"><i class="fa fa-angle-right"></i></div>
        </div>
    </a>

    <div class="scroll-info">
        <a href="#home-nav">
            <div class="shape">
                <i class="fa fa-angle-down"></i>
            </div>
        </a>
    </div>
    <!--/.scroll-info -->

</section><!-- /.banner -->
<!-- Banner End -->

<!-- Feature Panel Begin -->
<section class="feature-panel-wrap sec-pad">
    <div class="container">
        <div class="feature-panel panel with-nav-tabs">
            <div class="panel-body">
                <div class="tab-content">

                    <div class="tab-pane fade in active" id="tabfeature1">
                        <div class="col-md-5 no-h-padding">
                            <div class="image">
                                <img src=" {{asset('assets/images/feature-panel1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="description">
                                <div class="title">
                                    <h4 class="underlined-heading">Learn To Dive</h4>
                                </div>
                                <div class="content">
                                    <p>We hire only certified professional instructors with training experience to let you see all diving benefits and joy.Coached by well equipped and experienced instructor, this diving program provides the required guidance and knowledge of scuba diving. This program promises a deeper experience of the underwater phenomenon.</p>
                                </div>
                                <!--/.content -->

                                <a href="#" class="def-btn btn-outline more-info">More Info</a>
                            </div>
                            <!--/.description -->
                        </div>
                    </div>
                    <!--/.tab-pane -->

                    <div class="tab-pane fade in" id="tabfeature2">
                        <div class="col-md-5 no-h-padding">
                            <div class="image">
                                <img src=" {{asset('assets/images/feature-panel2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="description">
                                <div class="title">
                                    <h4 class="underlined-heading">Certification</h4>
                                </div>
                                <div class="content">
                                    <p>We help all applicants who would like to become certified divers and instructors to achieve the best results.Coached by experience instructor with choice of certificates of PADI or SSI, this diving program prepares you to become a skillfull diver. </p>
                                </div>
                                <!--/.content -->

                                <a href="#" class="def-btn btn-outline more-info">More Info</a>
                            </div>
                            <!--/.description -->
                        </div>
                    </div>
                    <!--/.tab-pane -->

                    <div class="tab-pane fade in" id="tabfeature3">
                        <div class="col-md-5 no-h-padding">
                            <div class="image">
                                <img src=" {{asset('assets/images/feature-panel3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="description">
                                <div class="title">
                                    <h4 class="underlined-heading">Tour</h4>
                                </div>
                                <div class="content">
                                    <p>Get away from daily routine and join us in a tour to the most amazing exotic places around the world.Shescuba provides selections of diving programmes in different sites in Indonesia. The chosen sites are listed as the county’s best spots for diving.</p>
                                </div>
                                <!--/.content -->

                                <a href="#" class="def-btn btn-outline more-info">More Info</a>
                            </div>
                            <!--/.description -->
                        </div>
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade in" id="tabfeature4">
                        <div class="col-md-5 no-h-padding">
                            <div class="image">
                                <img src=" {{asset('assets/images/feature-panel2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="description">
                                <div class="title">
                                    <h4 class="underlined-heading">Full Service</h4>
                                </div>
                                <div class="content">
                                    <p>If you haven’t decided which course to take or what tour to book, you can use our full service list to choose.Our team operates with a set of skills that will assist you not only to prepare everything you need for your diving trip, but also to explore the surrounding beauty of each diving sites that are rich with variety of local cultures, cuisines and panoramas.</p>
                                </div>
                                <!--/.content -->

                                <a href="#" class="def-btn btn-outline more-info">More Info</a>
                            </div>
                            <!--/.description -->
                        </div>
                    </div>
                </div>
                <!--/.tab-content -->

            </div>
            <!--/.panel-body -->

            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tabfeature1" data-toggle="tab" class="no-effect">
                            <i class="pe-7s-study"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#tabfeature2" data-toggle="tab" class="no-effect">
                            <i class="pe-7s-medal"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#tabfeature3" data-toggle="tab" class="no-effect">
                            <i class="pe-7s-map"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#tabfeature4" data-toggle="tab" class="no-effect">
                            <i class="pe-7s-config"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/.panel-heading -->
        </div>
        <!--/.feature-panel -->
    </div>
    <!--/.container -->
</section>
<!--/.feature-panel-wrap -->
<!-- Feature Panel End -->


<!-- Title Paragraph Begin -->
<section class="title-paragraph sec-pad-t">
    <div class="container">
        <div class="col-md-9 col-sm-6 margin-responsive">
            <h3 class="underlined-heading wow animated fadeInUp">Our Latest Trip</h3>
        </div>
    </div>
</section>
<!--/.title-paragraph-->
<!-- Title Paragraph End -->

<!-- Portfolio Collase Begin -->
<section class="portfolio-collase sec-pad no-b-padding">
    <div class="container-fluid no-h-padding">
        @foreach($trips as $trip)
        <div class="col-md-3 col-sm-6 no-h-padding">
            <div class="portfolio-item">
                <figure class="portfolio-figure">
                    <img src="{{asset('upload/trips/'. $trip->image)}}" alt="Portfolio Image">
                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <h2>{{$trip -> title}}</h2>
                                <div class="separator"></div>
                                <p>{{$trip -> address}}</p>

                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!--/.portfolio-item -->
        </div>
        @endforeach

    </div>
    <!--/.container-fluid -->
</section>
<!--/.portfolio -->
<!-- Portfolio Collase End -->


@endsection