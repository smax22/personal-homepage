@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 companies">
                <a href="#"><img src="{{ URL::to('src/images/the-jerk-shop-logo.png') }}" alt="The Jerk Shop"></a>
                <a href="#">Company Logo #2</a>
                <a href="#">Company Logo #3</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 details">
                <div class="detail">
                    <h3>{{ trans('ui_text.track.jerkshop.title') }}</h3>
                    <div class="quote">"{{ trans('ui_text.track.jerkshop.quote') }}"</div>
                    <h6>{{ trans('ui_text.track.jerkshop.services-headline') }}</h6>
                    <div>
                        <ul>
                            <li>{{ trans('ui_text.track.jerkshop.services-1') }}</li>
                            <li>{{ trans('ui_text.track.jerkshop.services-2') }}</li>
                            <li>{{ trans('ui_text.track.jerkshop.services-3') }}</li>
                            <li>{{ trans('ui_text.track.jerkshop.services-4') }}</li>
                        </ul></div>
                    <span class="highlight">{{ trans('ui_text.track.jerkshop.timeframe', ['time' => '8']) }}</span>
                </div>
                <div class="detail">
                    The detail section - #2
                </div>
                <div class="detail">
                    The detail section - #3
                </div>
            </div>
        </div>
    </div>
@endsection