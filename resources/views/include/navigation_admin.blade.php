<div class="row">
    <div class="col-xs-12">
        <ul>
            @inject('user','App\Http\Contracts\UserRepositoryInterface')
            @if($user->isLoggedIn())
                <!-- Logged in -->
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="{{ Request::is('admin/posts') || Request::is('admin/posts/*') ? 'active' : '' }}"><a href="{{ route('post.index') }}">Posts</a></li>
                <li class="{{ Request::is('admin/comments') || Request::is('admin/comments/*') ? 'active' : '' }}"><a href="">Comments</a></li>
                <li class="{{ Request::is('admin/contact') || Request::is('admin/contact/*') ? 'active' : '' }}"><a href="">Contact</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            @else
                <!-- Not logged in -->
                <li class="active"><a href="{{ route('admin.login') }}">Login</a></li>
            @endif


        </ul>
    </div>
</div>
