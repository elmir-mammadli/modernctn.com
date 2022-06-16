<!-- Our Projects-->
<section class="section section-md bg-default text-center pb-0 prr">
    <div class="container-fullwidth">
        <h2>{{ __('main.projects_heading') }}</h2>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-carousel_style-2 wow fadeIn" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-dots="false" data-nav="true" data-loop="true" data-stage-padding="0" data-md-stage-padding="20" data-lg-stage-padding="0" data-md-margin="15" data-xl-margin="0" data-mouse-drag="false">
            @foreach($projects as $project)
            <div class="thumb-janez">
                <figure class="thumb-janez__image-wrap"><img src="{{ Voyager::image($project->title_image) }}" alt="" width="481" height="383"/>
                </figure>
                <div class="thumb-janez__content bg-gray-dark">
                    <div class="thumb-janez__content-inner">
                        <h5><a href="{{ route('project', $project) }}">{{ $project->getTranslatedAttribute('title', app()->getLocale()) }}</a></h5>
                        <p>{{ $project->getTranslatedAttribute('description', app()->getLocale()) }}</p><a class="button button-xs button-darker" href="{{ route('project', $project) }}">{{ __('main.read_more') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
