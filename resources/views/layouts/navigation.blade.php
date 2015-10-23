<header>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="logo">
                <div class="clearfix"></div>
                <img src="{{ URL::asset('src/images/upscope-main-logo.sv') }}g"></img>
            </div>
            {{-- <div class="logo visible-lg">Maximilian Schwarzmüller Webservices</div> 
            <div class="logo hidden-lg">M. Schwarzmüller Webservices</div>  --}}
            <nav>
                @if(!Auth::check())
                    <span class="{{ Request::is('/') || Request::is('blog/*')|| Request::is('post/*') ? 'active' : ''}}"><a href="{{ route('home') }}">{{ trans('text.blog') }}</a></span>
                    <span class="{{ Request::is('product/*') ? 'active' : ''}}"><a href="{{ route('product.index') }}">{{ trans('text.products') }}</a></span>
                    <span class="{{ Request::is('reference/*') ? 'active' : ''}}"><a href="{{ route('reference.index') }}">{{ trans('text.references') }}</a></span>
                    <span class="{{ Request::is('contact') ? 'active' : ''}}"><a href="{{ route('contact.index') }}">{{ trans('text.contact') }}</a></span>
                @else
                    <span class="{{ Request::is('admin/index') ? 'active' : ''}}"><a href="{{ route('admin.index') }}">Dashboard</a></span>
                    <span class="{{ Request::is('post/*') ? 'active' : ''}}"><a href="{{ route('post.showAll') }}">Posts</a></span>
                    <span class="{{ Request::is('product/*') ? 'active' : ''}}"><a href="{{ route('product.showAll') }}">Products</a></span>
                    <span class="{{ Request::is('reference/*') ? 'active' : ''}}"><a href="{{ route('reference.showAll') }}">References</a></span>
                    <span class="{{ Request::is('config/*') ? 'active' : ''}}"><a href="#">Config</a></span>
                    <span><a href="{{ route('admin.logout') }}">Logout</a></span>
                @endif
            </nav>
        </div>
    </div>
</header>