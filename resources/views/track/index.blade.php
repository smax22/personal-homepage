@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 companies">
                <a href="#"><img src="{{ URL::to('src/images/the-jerk-shop-logo.png') }}" alt="The Jerk Shop"></a>
                <a href="#">Company Logo #2</a>
                <a href="#">Company Logo #3</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 details">
                <div class="detail">
                    <h3>The Jerk Shop - High-Quality Food Producer and Event Place</h3>
                    <div class="quote">"Quote"</div>
                    <h6>Services delivered</h6>
                    <div>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul></div>
                    <span class="highlight">Timeframe: 8 weeks</span>
                </div>
                <div class="detail">
                    The detail section - #2
                </div>
                <div class="detail">
                    The detail section - #3
                </div>
            </div>
        </div>
    </div>
@endsection