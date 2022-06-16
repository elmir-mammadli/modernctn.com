@extends('front.layouts.main')

@section('content')
    <section class="breadcrumbs-custom bg-image" style="background-image: url(https://livedemo00.template-help.com/wt_prod-19521/images/bg-image-2.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ __('main.projects_heading') }}</h2>
            <ul class="breadcrumbs-custom__path">
                <li>
                    <a href="/">{{ __('main.home_heading') }}</a>
                </li>
                <li class="active">{{ __('main.projects_heading') }}</li>
            </ul>
        </div>
    </section>

    <section class="section section-md bg-default">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-4">
                    <a href="{{ route('project', $project) }}" class="pr-item">
                        <div class="pr-img" style="background-image: url({{ Voyager::image($project->title_image) }});"></div>
                        <div class="about-pr">
                            <p>
                                {{ $project->getTranslatedAttribute('title', app()->getLocale()) }}
                            </p>
                            <span>
                                {{ $project->getTranslatedAttribute('address', app()->getLocale()) }}
                            </span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
