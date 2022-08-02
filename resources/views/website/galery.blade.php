@extends('website.layouts.app')
@section('content')

<!-- Banner Small Begin -->
<section class="section banner-small parallax-section valign-wrap" style="background: url('assets/images/banner-small-3.jpg'); background-size: cover;">
    <div class="overlay"></div>
    <div class="content-wrap valign-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="title wow animated fadeInUp">
                    <h1>Gallery List</h1>
                </div>
                <div class="subtitle wow animated fadeIn">
                    <h2>Photograph Of Our Trip</h2>
                </div>
            </div>
        </div>
    </div>
    <!--/.content-wrap -->
</section>
<!--/.banner-small -->
<!-- Banner Small End -->

<!-- Title Paragraph Center Begin -->
<section class="title-paragraph sec-h-pad sec-hq-pad-t second-bg mar-b-60">
    <div class="container">
        <div class="col-md-12 col-sm-12 margin-responsive">
            <h3 class="underlined-heading">Gallery Shescuba</h3>
        </div>
    </div>
</section>
<!--/.title-paragraph-->

<!-- Gallery List Begin -->
<section class="gallery-list">
    <div class="container no-h-padding">
        <div class="isotope-wrap masonry-grid grouped-image-list mt-4">
            @foreach($galerys as $galery)
            <div class="element-item masonry-item col-md-4 col-sm-6 col-xs-12 with-space">
                <figure class="gallery-column margin-responsive">
                    <img src="{{asset('upload/galery/'.$galery->filenames)}}" alt="">

                    <figcaption>
                        <div class="valign-wrap fullwidth fullheight">
                            <div class="caption-wrap valign-middle">
                                <a href="{{asset('upload/galery/'.$galery->filenames)}}" class="no-effect"><i class="pe-7s-search pe-2x"></i></a>
                            </div>
                            <!--/.caption-wrap -->
                        </div>
                    </figcaption>
                </figure>
                <!--/.gallery-column -->
            </div>
            @endforeach

        </div>
        <!--/.isotope-wrap -->
    </div>
    <!--/.container -->
</section>
<!--/.gallery-list -->
<!-- Gallery List End -->
@endsection