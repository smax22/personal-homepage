<header>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="logo visible-lg">Maximilian Schwarzmüller Webservices</div> 
            <div class="logo hidden-lg">M. Schwarzmüller Webservices</div> 
            <nav>
                @if(!Auth::check())
                    <span class="{{ Request::is('/') || Request::is('blog/*') ? 'active' : ''}}"><a href="{{ route('home') }}">Blog</a></span>
                    <span class="{{ Request::is('product/*') ? 'active' : ''}}"><a href="#">Products</a></span>
                    <span class="{{ Request::is('reference/*') ? 'active' : ''}}"><a href="#">Track Record</a></span>
                    <span class="{{ Request::is('contact/*') ? 'active' : ''}}"><a href="#">Contact</a></span>
                @else
                    <span class="{{ Request::is('admin/index') ? 'active' : ''}}"><a href="{{ route('admin.index') }}">Dashboard</a></span>
                    <span><a href="{{ route('post.showAll') }}" class="{{ Request::is('post/*') ? 'active' : ''}}">Posts</a></span>
                    <span><a href="#" class="{{ Request::is('product/*') ? 'active' : ''}}">Products</a></span>
                    <span><a href="#" class="{{ Request::is('reference/*') ? 'active' : ''}}">References</a></span>
                    <span><a href="#" class="{{ Request::is('config/*') ? 'active' : ''}}">Config</a></span>
                    <span><a href="{{ route('admin.logout') }}">Logout</a></span>
                @endif
            </nav>
        </div>
    </div>
</header>