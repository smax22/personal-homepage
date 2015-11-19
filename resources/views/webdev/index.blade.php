@extends('layouts.master')

@inject('localized_texts_repository', 'App\Http\Contracts\LocalizedTextsRepositoryInterface')

@section('content')
    <div class="container-fluid">
        {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 quick-contact">--}}
        {{--<span>I'm interested in</span>--}}
        {{--<div class="checkbox">--}}
        {{--<label>--}}
        {{--<input type="checkbox" name="analysis-consulting">Analysis &amp; Consulting Services--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--<div class="checkbox">--}}
        {{--<label>--}}
        {{--<input type="checkbox" name="development">Development (Backend/ Frontend) Services--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--<div class="checkbox">--}}
        {{--<label>--}}
        {{--<input type="checkbox" name="maintenance">Maintenance Services--}}
        {{--</label>--}}
        {{--</div>--}}
        {{--<a href="#" class="btn-alt">Contact</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
                <div class="service">
                    <img class="img-responsive header-img"
                         src="{{ URL::to('src/images/icon-service-analysis.png') }}" alt="Analysis services">
                    <h4>{{ trans('ui_text.services.analysis-heading') }}</h4>
                    <p>
                        {{ $localized_texts_repository->getLocalizedText('ser-analysis', App::getLocale())->text }}
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
                <div class="service">
                    <img class="img-responsive header-img"
                         src="{{ URL::to('src/images/icon-service-webdesign.png') }}" alt="Webdesign services">
                    <h4>{{ trans('ui_text.services.frontend-heading') }}</h4>
                    <p>
                        {{ $localized_texts_repository->getLocalizedText('ser-frontend', App::getLocale())->text }}
                    </p>

                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
                <div class="service">
                    <img class="img-responsive header-img"
                         src="{{ URL::to('src/images/icon-service-programming.png') }}" alt="Backend services">
                    <h4>{{ trans('ui_text.services.backend-heading') }}</h4>
                    <p>
                        {{ $localized_texts_repository->getLocalizedText('ser-backend', App::getLocale())->text }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
                <div class="service">
                    <h6>{{ trans('ui_text.services.engage') }}</h6>
                    <a class="btn-std" href="{{ route('contact.form') }}">{{ trans('ui_text.services.btn-contact') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection