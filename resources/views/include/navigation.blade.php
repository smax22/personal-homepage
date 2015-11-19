<header>
    <nav class="top-navigation">
        <a class="collapsed" href="#">Menu</a>
        <div class="navigation-elements">
            <ul class="navigation-elements">
                <li class="{{ Request::is('/') || Request::is('posts/*') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">{{ trans('ui_text.nav.blog') }}</a></li>
                <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ route('web_dev.index') }}">{{ trans('ui_text.nav.services') }}</a></li>
                <li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ route('experience.index') }}">{{ trans('ui_text.nav.track') }}</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact.form') }}">{{ trans('ui_text.nav.contact') }}</a></li>
            </ul>
        </div>
        <div class="navigation-elements-phone">
            <ul class="navigation-elements-collapsed">
                <li class="{{ Request::is('/') || Request::is('posts/*') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">{{ trans('ui_text.nav.blog') }}</a></li>
                <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ route('web_dev.index') }}">{{ trans('ui_text.nav.services') }}</a></li>
                <li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ route('experience.index') }}">{{ trans('ui_text.nav.track') }}</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact.form') }}">{{ trans('ui_text.nav.contact') }}</a></li>
            </ul>
        </div>
        {{--<div class="locale">--}}
            {{--<a href="#">EN</a>--}}
            {{--<a href="#">DE</a>--}}
        {{--</div>--}}
    </nav>
    <div class="change-locale">
        @if(App::getLocale() == 'en')
            <a href="{{ route('changelocale', ['locale' => 'de']) }}">DE</a> | EN
        @else
            DE | <a href="{{ route('changelocale', ['locale' => 'en']) }}">EN</a>
        @endif
    </div>
</header>