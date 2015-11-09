@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                @if(count($errors) > 0)
                    <section class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
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
                        <div class="col-sm-6 form-group">
                            <label for="name">{{ trans('ui_text.contact.name') }}</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="mail">{{ trans('ui_text.contact.mail') }}</label>
                            <input type="email" class="form-control" placeholder="Mail" name="mail" id="mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="subject">{{ trans('ui_text.contact.subject') }}</label>
                            <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
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
                        <div class="col-sm-12 form-group">
                            <label for="body">{{ trans('ui_text.contact.message') }}</label>
                            <textarea type="text" class="form-control" placeholder="Message" name="body" id="body" rows="12"></textarea>
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