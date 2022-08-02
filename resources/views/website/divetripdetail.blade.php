@extends('website.layouts.app')
@section('content')

<!-- Iconic Title Begin -->
<div class="container">
    <div class="iconic-title text-center col-md-12 no-h-padding sec-hq-pad-t sec-q-pad-b">
        <div class="col-md-12 no-h-padding">
            <img src="{{asset('upload/tumbnail/'.$divetrips->tumbnail)}}" alt="" width="100%" height="550px">
        </div>
        <div class="col-md-12 no-h-padding">
            <div class="title-icon">
                <span><i class="pe-7s-anchor pe-2x"></i></span>
            </div>
        </div>
        <div class="col-md-12 no-h-padding">
            <h1>{{$divetrips->title}}</h1>
        </div>
    </div>
    <!--/.iconic-title -->
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin-responsive sec-h-pad-b text-center">
        <p>{{$divetrips->description}}</p>
    </div>
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin-responsive sec-h-pad-b">
        <h2>Include</h2>
        <ul>
            <li>Transport to & from accommodation </li>
            <li>Full equipment rental (BCD, regulator set, wetsuit, mask, booties, fins)</li>
            <li>Lunch & refreshments</li>
        </ul>
    </div>
    <div class="col-lg-12">
        <h5>Disclaimer: As with all diving destinations, the availability of each dive site is highly dependent on weather and underwater conditions. For everyone's safety, we will try our best to accommodate your preferences but they may not be guaranteed. We can however, guarantee that you will have a safe and memorable experience!</h5>
    </div>
</div>
<!-- Iconic Title End -->

@endsection