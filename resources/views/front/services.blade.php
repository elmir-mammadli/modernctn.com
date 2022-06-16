@extends('front.layouts.main')

@section('content')
    <section class="breadcrumbs-custom bg-image" style="background-image: url(https://livedemo00.template-help.com/wt_prod-19521/images/bg-image-2.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ __('main.services_heading') }}</h2>
            <ul class="breadcrumbs-custom__path">
                <li>
                    <a href="/">{{ __('main.home_heading') }}</a>
                </li>
                <li class="active">{{ __('main.services_heading') }}</li>
            </ul>
        </div>
    </section>

    <section class="section section-md bg-default">
        <div class="container">
            <div class="row row-70 justify-content-md-center justify-content-xl-between">
                @foreach($services as $service)
                <div class="col-md-6">
                    <div class="media media-service">
                        <img src="{{ asset('img/check.svg') }}" alt="">
                        <div class="media-body">
                            <h3>{{ $service->getTranslatedAttribute('title', app()->getLocale()) }}</h3>
                            <p>{{ $service->getTranslatedAttribute('description', app()->getLocale()) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
