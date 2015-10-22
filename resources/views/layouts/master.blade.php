@include('partials._header')
<div class="container-fluid">
    @include('layouts.navigation')
</div>
<div class="container-fluid">
    <div class="row">
        @yield('pre-content')
    </div>
    @yield('content')  
</div>
@include('partials._footer')
