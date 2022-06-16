@extends('front.layouts.main')

@section('content')
    @include('front.inc.slider')

    <!-- Production-->
    <section class="section section-md bg-default">
        <div class="container">
            <div class="row row-30 row-flex">
                <div class="col-lg-3 col-sm-6 wow fadeIn">
                    <!-- Box feature-->
                    <article class="box-feature">
                        <img src="{{ asset('img/m-1.svg') }}" alt="">
                        <p class="box-feature__title">{{ __('main.project_planning') }}</p>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box feature-->
                    <article class="box-feature">
                        <img src="{{ asset('img/m-2.svg') }}" alt="">
                        <p class="box-feature__title">{{ __('main.arch_eng') }}</p>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box feature-->
                    <article class="box-feature">
                        <img src="{{ asset('img/m-3.svg') }}" alt="">
                        <p class="box-feature__title">{{ __('main.lang_design') }}</p>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <!-- Box feature-->
                    <article class="box-feature">
                        <img src="{{ asset('img/m-4.svg') }}" alt="">
                        <p class="box-feature__title">{{ __('main.turnkey_construction') }}</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('front.inc.projects')

    <!-- Brands-->
    <section class="section parallax-container" data-parallax-img="images/parallax-1.jpg">
        <div class="parallax-content">
            <div class="section-sm owl-outer-navigation-wrap">
                <div class="container">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel_style-1 text-center" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-dots="true" data-nav="true" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav">
                        @foreach($brands as $brand)
                        <div class="item"><a class="link-image" href="{{ $brand->brand_url }}"><img src="{{ Voyager::image($brand->brand_path) }}" alt="" width="156" height="45"/></a></div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-outer-navigation" id="owl-carousel-nav">
                    <a class="owl-arrow owl-arrow-prev" href="#">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="owl-arrow owl-arrow-next" href="#">
                        <i class="fa fa-angle-right"></i>

                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
