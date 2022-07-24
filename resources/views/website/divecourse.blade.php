@extends('website.layouts.app')
@section('content')


@php
$id = $courses->id;
$image = DB::table('tb_imagecourse')->where('id_course',$id)->first();
$image = explode('|',$image->filenames);
@endphp

<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('/upload/tumbnail/{{$courses->tumbnail}}'); background-size: cover; height: 50%;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title">
                    <h1>{{$courses->title}}</h1>
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
            <h1>{{$courses->title}}</h1>
        </div>
    </div>
    <!--/.iconic-title -->
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin-responsive sec-h-pad-b text-center">
        <p>{{$courses->description}}</p>
    </div>
</div>
<!-- Iconic Title End -->

<!-- Banner Carousel Begin -->
<section class="banner-carousel">
    <div class="container container-medium">
        <div class="col-md-12 no-h-padding">
            <div id="banner-carousel-alt" class="carousel slide wow animated fadeIn" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    @foreach($image as $key => $item)
                    <figure class="item {{$key == 0 ? 'active' : '' }}">
                        <img src="{{asset('upload/imagecourse/'.$item)}}" alt="Portfolio image">
                    </figure>
                    @endforeach
                </div>
                <!--/.carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#banner-carousel-alt" role="button" data-slide="prev">
                    <div class="control-button def-btn btn-solid left"><i class="fa fa-angle-left"></i></div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#banner-carousel-alt" role="button" data-slide="next">
                    <div class="control-button def-btn btn-solid right"><i class="fa fa-angle-right"></i></div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/.carousel -->
        </div>
    </div>
    <!--/.container -->
</section>
<!--/.banner-carousel -->
<!-- Banner Carousel End -->
<!-- Portfolio Single Section Begin -->
<section class="portfolio-single container-fluid no-h-padding" id="portfolio">
    <div class="container-medium clearfix sec-hq-pad">
        <div class="row">
            <div class="col-md-6 description margin-responsive">
                <h3 class="textbold wow animated fadeIn mar-b-20">Detail</h3>
                <table>
                    <tr>
                        <td>Price</td>
                        <td> :</td>
                        <td> {{$courses->price}} K</td>
                    </tr>
                    <tr>
                        <td>Duration</td>
                        <td> : </td>
                        <td> {{$courses->duration}} Day</td>
                    </tr>

                </table>

                <a class="def-btn btn-solid wow animated fadeIn" href="#">Booking Now</a>
            </div>
            <div class="col-md-6 client-testimonial">
                <div class="client-bio wow animated fadeIn">
                    <div class="client-photo"><img src="{{asset('assets/images/client.jpg')}}" alt="Clients Photo"></div>
                    <div class="name-position">
                        <h4 class="name">Novie Bahri</h4>
                        <p class="position">CEO, Owner</p>
                    </div>
                    <div class="client-brand">
                        <img src="{{asset('assets/images/favicon/logo-2.png')}}" width="60%" alt="Clients Brand">
                    </div>
                </div>
                <div class="client-comment wow animated fadeIn">
                    <h4 class="main-comment">Great Services, Very satisfied</h4>
                    <p class="text-comment mar-t-20">
                        <span class="quote-bg"><i class="fa fa-quote-right"></i></span>
                        Praesent faucibus nisi eu ipsum sollicitudin gravida. Proin nec aliquet eros. Phasellus vel tempor enim, non finibus leo. Nam finibus lobortis lectus non mattis. Integer a orci nec ante pharetra rhoncus. Maecenas quam est, laoreet sit amet consequat non, porta eget erat. Etiam vel metus non tortor congue pellentesque at id augue.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.portfolio-single -->
<!-- Portfolio Single Section End -->

@endsection