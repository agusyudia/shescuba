@extends('website.layouts.app')
@section('content')

<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('assets/images/banner-small-2.jpg'); background-size: cover;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title wow animated fadeInUp">
                    <h1>Dive Courses</h1>
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
<div class="bg-blue">
    <div class="container">

        <div class="col-md-12 sec-pad no-h-padding">
            <div class="masonry-grid isotope-wrap ">
                @foreach($divecourses as $divecourse)
                <div class="col-md-6 masonry-item">
                    <article class="blog-post-alt col-md-12 wow animated fadeIn light-bg">
                        <div class="image-content col-md-12 no-h-padding">
                            <div class="image">
                                <img src="{{asset('upload/tumbnail/'.$divecourse->tumbnail)}}" alt="">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 date">IDR {{$divecourse->price}} Per Pax</div>
                        </div>
                        <!--/.image-content -->

                        <div class="text-content col-md-12 no-h-padding margin-responsive">
                            <div class="title">
                                <a href="{{route('divecoursedetail', $divecourse->id)}}">
                                    <h3>{{$divecourse->title}}</h3>
                                </a>
                            </div>
                            <div class="text">
                                <p>{{Illuminate\Support\Str::limit($divecourse->description, 150)}}</p>
                            </div>
                            <div class="info text-left">
                                <a href="{{route('divecoursedetail', $divecourse->id)}}" class="link">Read More...</a>
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