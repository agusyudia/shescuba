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

<!-- Blog Post Begin -->
<div class="container">
    <div class="col-md-12 sec-pad no-h-padding">
        <div class="masonry-grid isotope-wrap">

            @foreach($divetrips as $divetrip)
            <div class="col-md-4 masonry-item">
                <article class="blog-post-alt col-md-12 no-h-padding wow animated fadeIn">
                    <div class="image-content col-md-12 no-h-padding">
                        <div class="image">
                            <img src="{{asset('upload/tumbnail/'.$divetrip->tumbnail)}}" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 date">IDR {{$divetrip->price}} for {{$divetrip->available}} Dive</div>
                    </div>
                    <!--/.image-content -->

                    <div class="text-content col-md-12 no-h-padding margin-responsive">
                        <div class="title">
                            <a href="{{route('divetripdetail', $divetrip->id)}}">
                                <h3>{{$divetrip->title}}</h3>
                            </a>
                        </div>
                        <div class="text">
                            <p>{{Illuminate\Support\Str::limit($divetrip->description, 150)}}</p>
                        </div>
                        <div class="info text-left">
                            <a href="#" class="link">
                                <i class="pe-7s-target"></i>
                                {{$divetrip->kode_level_dive}}
                            </a>
                            <a href="#" class="link">
                                <i class="pe-7s-link"></i>
                                {{$divetrip->water_entry}}
                            </a>
                            <a href="#" class="link">
                                <i class="pe-7s-drop"></i>
                                {{$divetrip->water_conditions}}
                            </a>
                        </div>
                    </div>
                    <!--/.text-content -->
                </article>
                <!--/.blog-post -->
            </div>
            @endforeach
        </div>
        <!--/.pagination-wrap -->
        <!-- Pagination Section End -->
    </div>

    <!--/.blog-sidebar -->
</div>
<!-- Blog Post End -->
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