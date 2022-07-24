@extends('website.layouts.app')
@section('content')

<!-- Iconic Title Begin -->
<div class="container">
    <div class="iconic-title text-center col-md-12 no-h-padding sec-hq-pad-t sec-q-pad-b">
        <div class="col-md-12 no-h-padding">
            <div class="title-icon">
                <span><i class="pe-7s-anchor pe-2x"></i></span>
            </div>
        </div>
        <div class="col-md-12 no-h-padding">
            <h1>{{$divetrips->title}}</h1>
            <h2>{{$divetrips->address}}</h2>
        </div>
    </div>
    <!--/.iconic-title -->
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin-responsive sec-h-pad-b text-center">
        <p>{{$divetrips->description}}</p>
    </div>
</div>
<!-- Iconic Title End -->

<!-- Portfolio Single Section Begin -->
<section class="portfolio-single container-fluid no-h-padding" id="portfolio">
    <div class="container-medium clearfix sec-hq-pad">
        <div class="row">
            <div class="col-md-6 description margin-responsive">

                <h3 class="textbold wow animated fadeIn mar-b-20">Detail</h3>
                <table>
                    <tr>
                        <td>Available</td>
                        <td> :</td>
                        <td> {{$divetrips->available}} Person</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td> :</td>
                        <td> {{$divetrips->price}} K</td>
                    </tr>
                    <tr>
                        <td>Level Dive</td>
                        <td> :</td>
                        <td> {{$divetrips->kode_level_dive}}</td>
                    </tr>
                    <tr>
                        <td>Water Entry</td>
                        <td> :</td>
                        <td> {{$divetrips->water_entry}}</td>
                    </tr>
                    <tr>
                        <td>Water Conditions</td>
                        <td> :</td>
                        <td> {{$divetrips->water_conditions}}</td>
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