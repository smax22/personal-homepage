<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"><a href="{{ route('contact.form')  }}">{{ trans('ui_text.nav.contact') }}</a></div>
            {{--<div class="col-sm-4 text-center"><a href="#">@include('include.social')</a></div>--}}
            <div class="col-sm-6 text-right"><a href="{{ route('other.impressum') }}">{{ trans('ui_text.nav.impressum') }}</a></div>
        </div>
    </div>
</footer>
