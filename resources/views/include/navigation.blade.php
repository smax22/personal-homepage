<header>
    <nav class="top-navigation">
        <a class="collapsed" href="#">Menu</a>
        <div>
            <ul class="navigation-elements">
                <li class="{{ Request::is('/') || Request::is('posts/*') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">{{ trans('ui_text.nav.blog') }}</a></li>
                <li class="{{ Request::is('web-development') ? 'active' : '' }}"><a href="{{ route('web_dev.index') }}">{{ trans('ui_text.nav.services') }}</a></li>
                <li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ route('experience.index') }}">{{ trans('ui_text.nav.track') }}</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact.form') }}">{{ trans('ui_text.nav.contact') }}</a></li>
            </ul>
            EN
        </div>
        <div class="navigation-elements-phone">
            <ul class="navigation-elements-collapsed">
                <li class="{{ Request::is('/') || Request::is('posts/*') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">Blog & Tutorials</a></li>
                <li class="{{ Request::is('web-development') ? 'active' : '' }}"><a href="{{ route('web_dev.index') }}">{{ trans('ui_text.nav.services') }}</a></li>
                <li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ route('experience.index') }}">{{ trans('ui_text.nav.track') }}</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact.form') }}">{{ trans('ui_text.nav.contact') }}</a></li>
            </ul>
        </div>

    </nav>
</header>