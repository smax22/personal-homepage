@include('partials._header')
<div class="container-fluid">
    @include('layouts.navigation')
</div>
<div class="container-fluid">
    <div class="row">
        <section class="main-image clearfix">
            <div class="col-lg-8 col-lg-offset-2">
                @yield('main-image')
            </div>
        </section> 
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            @yield('content')
        </div>
    </div>
</div>
@include('partials._footer')