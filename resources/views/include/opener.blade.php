<div class="opener">
    <img src="{{ URL::to('src/images/ms-webservices-logo.svg') }}" alt="Logo" class="img-responsive logo">
    <p>{{ trans('ui_text.opener.text') }}</p>
    <a class="quicklinks" href="{{ route('contact.form') }}">{{ trans('ui_text.opener.hire') }}</a>
    <a class="quicklinks" href="{{ route('blog.by_tag', ['tag' => 'Tutorial']) }}">{{ trans('ui_text.opener.tutorials') }}</a>
</div>