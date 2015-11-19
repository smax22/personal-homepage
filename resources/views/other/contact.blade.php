@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                @if(count($errors) > 0)
                    <section class="alert alert-danger">
                        <ul>
                            {{ trans('ui_text.contact.alert.validation') }}
                        </ul>
                    </section>
                @endif
                @if(Session::has('failure'))
                    <section class="alert alert-danger">
                        {{ Session::get('failure') }}
                    </section>
                @elseif(Session::has('success'))
                    <section class="alert alert-success">
                        {{ Session::get('success') }}
                    </section>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <h1>{{ trans('ui_text.contact.title') }}</h1>
                <form action="{{ route('contact.send_message') }}" method="post">
                    <div class="row">
                        <div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">{{ trans('ui_text.contact.name') }}</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="{{ Request::old('name') ? Request::old('name') : '' }}">
                        </div>
                        <div class="col-sm-6 form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
                            <label for="mail">{{ trans('ui_text.contact.mail') }}</label>
                            <input type="email" class="form-control" placeholder="Mail" name="mail" id="mail" value="{{ Request::old('mail') ? Request::old('mail') : '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject">{{ trans('ui_text.contact.subject') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('ui_text.contact.subject') }}" name="subject" id="subject" value="{{ Request::old('subject') ? Request::old('subject') : '' }}">
                        </div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-6">--}}
                            {{--<h6>I'm interested in</h6>--}}
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
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-sm-12 form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body">{{ trans('ui_text.contact.message') }}</label>
                            <textarea type="text" class="form-control" placeholder="{{ trans('ui_text.contact.message') }}" name="body" id="body" rows="12">{{ Request::old('body') ? Request::old('body') : '' }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button type="submit" class="btn-std">{{ trans('ui_text.contact.submit') }}</button>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
    </div>
@endsection