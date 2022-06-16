@extends('front.layouts.main')

@section('content')

    <section class="breadcrumbs-custom bg-image" style="background-image: url(https://livedemo00.template-help.com/wt_prod-19521/images/bg-image-2.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ __('main.projects_heading') }}</h2>
            <ul class="breadcrumbs-custom__path">
                <li>
                    <a href="/">{{ __('main.home_heading') }}</a>
                </li>
                <li>
                    <a href="{{ route('projects') }}">{{ __('main.projects_heading') }}</a>
                </li>
                <li class="active">{{ $project->getTranslatedAttribute('title', app()->getLocale()) }}</li>
            </ul>
        </div>
    </section>

    <section class="section section-md bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="layout-horizontal__aside">
                        <div class="slick-slider-vertical">
                            <div class="slick-slider carousel-parent" id="parent-carousel-1" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel-1" data-for="#child-carousel-1">
                                @foreach(json_decode($project->images, true) as $image)
                                <div class="item">
                                    <div class="slick-image"><img src="{{ Voyager::image($image, 'small') }}" alt="" width="565" height="401"/>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="slick-slider carousel-child" id="child-carousel-1" data-for="#parent-carousel-1" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-slide-to-scroll="1" data-vertical="false" data-sm-vertical="false" data-md-vertical="true" data-lg-vertical="true" data-xl-vertical="true" data-center-mode="true">
                                @foreach(json_decode($project->images, true) as $image)
                                <div class="item">
                                    <div class="slick-slider__inner">
                                        <div class="slick-thumb"><img src="{{ Voyager::image($image) }}" alt="" width="565" height="401"/>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about">
                        <h4>{{ $project->getTranslatedAttribute('title', app()->getLocale()) }}</h4>
                        <p>{!! nl2br($project->getTranslatedAttribute('body', app()->getLocale())) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
