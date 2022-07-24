@extends('website.layouts.app')
@section('content')
<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('assets/images/banner-small-2.jpg'); background-size: cover;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title wow animated fadeInUp">
                    <h1>Get In Touch</h1>
                </div>
                <div class="subtitle wow animated fadeIn">
                    <h2>Feel Free To Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <!--/.content-wrap -->
</section>
<!--/.banner-small -->
<!-- Banner Small End -->

<!-- Contact Title Paragraph Begin -->
<section class="contact-title-paragraph sec-pad-t sec-h-pad-b">
    <div class="container">
        <div class="iconic-title text-center col-md-12 no-h-padding no-h-padding wow animated fadeInUp">
            <div class="col-md-12 no-h-padding">
                <div class="title-icon">
                    <span><i class="pe-7s-call pe-2x"></i></span>
                </div>
            </div>
            <div class="col-md-12 no-h-padding">
                <h1>Our Contact</h1>
                <h2>Number</h2>
            </div>
        </div>
        <!--/.iconic-title -->
    </div>
</section>
<!--/.contact-title-paragraph -->
<!-- Contact Title Paragraph ENd -->

<!--Contact Columns Begin-->
<section class="contact-columns sec-pad-b">
    <div class="container">
        <div class="col-md-4 col-sm-4 column margin-responsive">
            <div class="iconic-title-alt wow animated fadeIn">
                <div class="title-icon-wrap text-center col-md-12 no-h-padding mar-b-20">
                    <div class="title-icon">
                        <i class="pe-7s-map-marker pe-2x pe-va"></i>
                    </div>
                </div>

                <h2 class="underlined-heading mar-t-10">Visit Us</h2>
            </div>
            <p class="text-center"><b>SHESCUBA</b></p>
            <p class="text-center">Jalan Palapa XIII no.3 Sidakarya Denpasar Selatan Bali - Indonesia </p>
        </div>
        <!--/.column -->

        <div class="col-md-4 col-sm-4 column margin-responsive">
            <div class="iconic-title-alt wow animated fadeIn">
                <div class="title-icon-wrap text-center col-md-12 no-h-padding mar-b-20">
                    <div class="title-icon">
                        <i class="pe-7s-phone pe-2x pe-va"></i>
                    </div>
                </div>

                <h2 class="underlined-heading mar-t-10">Make A Call</h2>
            </div>
            <p class="text-center">
                +62 821 6572 6769
                <br>
                +62 812-3907-1889
            </p>
        </div>
        <!--/.column -->

        <div class="col-md-4 col-sm-4 column margin-responsive">
            <div class="iconic-title-alt wow animated fadeIn">
                <div class="title-icon-wrap text-center col-md-12 no-h-padding mar-b-20">
                    <div class="title-icon">
                        <i class="pe-7s-mail pe-2x pe-va"></i>
                    </div>
                </div>

                <h2 class="underlined-heading mar-t-10">Our Email</h2>
            </div>
            <p class="text-center">
                <a href="mailto:shescuba.indonesia@gmail.com" class="__cf_email__">[email&#160;protected]</a>
            </p>
        </div>
        <!--/.column -->
    </div>
</section>
<!--Contact Columns End-->

<!--Map Canvas Begin-->
<section class="map">
    <iframe width="100%" height="520" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1920&amp;height=520&amp;hl=en&amp;q=Jalan%20Palapa%20XIII%20no.3%20Sidakarya%20Denpasar%20Selatan%20Bali%20-%20Indonesia%20Bali+(Shescuba)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://mapswebsite.net/fr'>http://mapswebsite.net/fr</a>
    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=423eb6063d86cd5077ab83d4d89e76eacfba955c'></script>
</section>
<!--Map Canvas End-->

@endsection