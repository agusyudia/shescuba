@extends('website.layouts.app')
@section('content')


@php
$id = $divecourses->id;
$image = DB::table('tb_imagecourse')->where('id_course',$id)->first();
$image = explode('|',$image->filenames);
@endphp

<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('/upload/tumbnail/{{$divecourses->tumbnail}}'); background-size: cover; height: 50%;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title">
                    <h1>{{$divecourses->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!--/.content-wrap -->
</section>
<!--/.banner-small -->
<!-- Banner Small End -->


<!-- Iconic Title Begin -->
<div class="container">
    <div class="iconic-title text-center col-md-12 no-h-padding sec-hq-pad-t sec-q-pad-b">
        <div class="col-md-12 no-h-padding">
            <div class="title-icon">
                <span><i class="pe-7s-anchor pe-2x"></i></span>
            </div>
        </div>
        <div class="col-md-12 no-h-padding">
            <h1>{{$divecourses->title}}</h1>
        </div>
    </div>
    <!--/.iconic-title -->
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin-responsive sec-h-pad-b text-center">
        <p>{{$divecourses->description}}</p>
    </div>
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin-responsive sec-h-pad-b">
        <h3>Pre-requisites</h3>
        <ul>
            <li>10 years old</li>
            <li>Be in good physical health</li>
        </ul>
        <h3>Include</h3>
        <ul>
            <li>Transfer to and from accommodation on all course days</li>
            <li>Lunch on all course days</li>
            <li>Equipment rental, tanks and weights</li>
        </ul>
        <h3>Duration</h3>
        <p>{{$divecourses->duration}} Day</p>
    </div>
    <div class="col-lg-12">
        <h5>To ensure we adhere to the no-fly limit, please note that we will refuse DSD bookings if your outbound flight from Bali is earlier than 3pm on the following day. Our consultants will request for your flight details (if any) and we kindly ask that you provide accurate information in the interest of your safety.</h5>
    </div>
</div>

@endsection