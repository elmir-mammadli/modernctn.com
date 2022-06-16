@extends('front.layouts.main')

@section('content')
    <section class="breadcrumbs-custom bg-image" style="background-image: url(https://livedemo00.template-help.com/wt_prod-19521/images/bg-image-2.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ __('main.about') }}</h2>
            <ul class="breadcrumbs-custom__path">
                <li>
                    <a href="/">{{ __('main.home_heading') }}</a>
                </li>
                <li class="active">{{ __('main.about') }}</li>
            </ul>
        </div>
    </section>

    <section class="section section-md bg-default">
        <div class="container">
                    <img src="{{ Voyager::image($about->image_path) }}" width="480px" class="about-img" alt="" style="
                    float:right;
                    margin-top: 62px;
                    padding-left: 15px;
                    ">
                    <div class="about">
                        <h4>{{ $about->getTranslatedAttribute('title', app()->getLocale()) }}</h4>
                        <p style="text-align: justify; font-size: 18px;">{!! nl2br($about->getTranslatedAttribute('body', app()->getLocale())) !!}</p>
                    </div>
        </div>

    </section>
@endsection
