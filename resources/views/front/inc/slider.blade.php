<!-- Swiper -->
<section class="section swiper-slider_style-1">
    <div class="swiper-container swiper-slider swiper-slider_height-1" data-loop="true" data-autoplay="4200" data-simulate-touch="false" data-additional-slides="0" data-custom-prev="#swiper-prev" data-custom-next="#swiper-next" data-custom-slide-effect="interLeaveEffect">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
            <div class="swiper-slide @if($loop->first) context-light @endif">
                <div class="slide-inner" style="background-image: url({{ Voyager::image($slide->image_path) }});">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <h1 data-caption-animate="fadeInUpSmall">{!! $slide->getTranslatedAttribute('main_head', app()->getLocale()) !!}</h1>
                            <div class="object-decorated"><span class="object-decorated__divider" data-caption-animate="fadeInRightSmall" data-caption-delay="300"></span>
                                <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">{{ $slide->getTranslatedAttribute('sub_head', app()->getLocale()) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-navigation swiper-navigation_modern">
        <div class="swiper-button-prev" id="swiper-prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </div>
        <div class="swiper-button-next" id="swiper-next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
    </div>
</section>
