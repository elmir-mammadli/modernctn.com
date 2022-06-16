@extends('front.layouts.main')

@section('content')
    <section class="breadcrumbs-custom bg-image" style="background-image: url(https://livedemo00.template-help.com/wt_prod-19521/images/bg-image-2.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ __('main.contact_heading') }}</h2>
            <ul class="breadcrumbs-custom__path">
                <li>
                    <a href="/">{{ __('main.home_heading') }}</a>
                </li>
                <li class="active">{{ __('main.contact_heading') }}</li>
            </ul>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered__main text-center">
                    <div class="layout-bordered__main-inner">
                        <h3>{{ __('main.contact_us') }}</h3>
                        <!-- RD Mailform-->
                        <form method="POST" action="{{ route('inquire_store') }}" class="rd-mailform" data-form-output="form-output-global" novalidate="novalidate">
                            @csrf
                            <div class="row align-items-md-end row-20">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input form-control-has-validation" id="contact-first-name" type="text" name="full_name" data-constraints="@Required"><span class="form-validation"></span>
                                        <label class="form-label rd-input-label" for="contact-first-name">{{ __('main.full_name') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input form-control-has-validation" id="contact-phone" type="text" name="contact_number" data-constraints="@Numeric @Required"><span class="form-validation"></span>
                                        <label class="form-label rd-input-label" for="contact-phone">{{ __('main.contact_phone') }}</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-wrap">
                                        <label class="form-label rd-input-label" for="contact-message">{{ __('main.message') }}</label>
                                        <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                                        <label class="form-label rd-input-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="button button-block button-primary" type="submit">{{ __('main.send') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="layout-bordered__aside">
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">{{ __('main.contact_phone') }}</p>
                        <div class="unit flex-row unit-spacing-xxs">
                            <div class="unit__body">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:{{ setting('site.contact_phone') }}">{{ setting('site.contact_phone') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">E-mail</p>
                        <div class="unit flex-row unit-spacing-xxs">
                            <div class="unit__body">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:{{ setting('site.contact_mail') }}">{{ setting('site.contact_mail') }}</a>
                            </div>

                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">{{ __('main.address') }}</p>
                        <div class="unit flex-row unit-spacing-xxs">
                            <div class="unit__body">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>{{ setting('site.address') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <!--                        <p class="heading-8">Get social </p>-->
                        <ul class="list-inline-xs">
                            <li><a class="icon icon-sm icon-default fa fa-facebook" href="{{ setting('site.fb_url') }}"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-twitter" href="{{ setting('site.twitter_url') }}"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-instagram" href="{{ setting('site.ig_url') }}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
