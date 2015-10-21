@include('partials._header')
<div class="container-fluid">
    @include('layouts.navigation_admin')
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            @yield('content')
        </div>
    </div>
</div>
@include('partials._footer')
