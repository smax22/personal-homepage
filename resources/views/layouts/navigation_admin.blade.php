<header>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="logo visible-lg">Maximilian Schwarzmüller Webservices</div> 
            <div class="logo hidden-lg">M. Schwarzmüller Webservices</div> 
            <nav>
                @if(Auth::check())
                    <span><a href="#" class="active">Dashboard</a></span>
                    <span><a href="#">Posts</a></span>
                    <span><a href="#">Comments</a></span>
                    <span><a href="#">Products</a></span>
                    <span><a href="#">References</a></span>
                    <span><a href="#">Config</a></span>
                    <span><a href="{{ route('admin.logout') }}">Logout</a></span>
                @endif
            </nav>
        </div>
    </div>
</header>