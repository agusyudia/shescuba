@extends('website.layouts.app')
@section('content')

<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('assets/images/banner-small-2.jpg'); background-size: cover;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title wow animated fadeInUp">
                    <h1>Dive Trips</h1>
                </div>
                <div class="subtitle wow animated fadeIn">
                    <h2>Bali - Sulawesi</h2>
                </div>
            </div>
        </div>
    </div>
    <!--/.content-wrap -->
</section>
<!--/.banner-small -->
<!-- Banner Small End -->

<!-- Portfolio Collase Begin -->
<section class="portfolio-collase" style="margin-top: 20px;">
    <div class="container no-h-padding">
        <div class="isotope-wrap masonry-grid">
            @foreach($divetrips as $divetrip)
            <div class="element-item masonry-item col-md-4 col-sm-6 col-xs-12 with-space  ">
                <div class="portfolio-item">
                    <figure class="portfolio-figure">
                        <img src="{{asset('upload/tumbnail/'.$divetrip->tumbnail)}}" alt="Portfolio Image">
                        <figcaption>
                            <div class="valign-wrap fullwidth fullheight">
                                <div class="caption-wrap valign-middle">
                                    <h2>{{$divetrip->title}}</h2>
                                    <a href="{{route('divetripdetail', $divetrip->id)}}" class="def-btn btn-outline portfolio-btn">
                                        <span class="text-content">
                                            More Detail <i class="pe-7s-angle-right-circle"></i></span>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!--/.portfolio-item -->
            </div>
            @endforeach

        </div>
        <!--/.isotope-wrap -->
    </div>
    <!--/.container-fluid -->
</section>
<!--/.portfolio -->
<!-- Portfolio Collase End -->

<!-- Title Paragraph Center Begin -->
<section class="title-paragraph-center text-center">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 margin-responsive">
            <h4 class="text-uppercase sec-h-pad-t">We'd love to hear about your trip request</h4>
            <div class="col-md-12 nopad-h sec-q-pad-t sec-pad-b">
                <a href="#" class="def-btn btn-outline">Booking Now</a>
            </div>
        </div>
    </div>
</section>
<!--/.title-paragraph-->
<!-- Title Paragraph End -->
@endsection