@extends('layouts.master_admin')

@section('content')
    <div class="row">
        <div class="col-xs-6">
            @if(count($errors) > 0)
                <section class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
            @endif
            @if(Session::has('info'))
                <section class="alert alert-danger">
                    {{ Session::get('info') }}
                </section>
            @endif
            <form action="{{ route('admin.login') }}" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
                <button class="btn-std" type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection