@extends('layouts.master')

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
            <div class="col-md-4 col-md-offset-2 col-xs-5 col-xs-offset-1" id="analysis-consulting">
                <div class="service">
                    <h5>{{ trans('ui_text.services.consulting') }}</h5>

                    <p>{{ trans('ui_text.services.consulting.text') }}</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-5" id="development-implementation">
                <div class="service">
                    <h5>{{ trans('ui_text.services.development') }}</h5>

                    <p>{{ trans('ui_text.services.development.text') }}</p>
                </div>
            </div>
        </div>
@endsection