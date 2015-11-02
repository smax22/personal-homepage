@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 quick-contact">
                <span>I'm interested in</span>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="analysis-consulting">Analysis &amp; Consulting Services
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="development">Development (Backend/ Frontend) Services
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="maintenance">Maintenance Services
                    </label>
                </div>
                <a href="#" class="btn-alt">Contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 service" id="analysis-consulting">
                <h5>Analysis &amp; Consulting</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, doloremque eius ipsum iste magni molestias nesciunt non officia omnis, quo quos rem reprehenderit saepe ut voluptate. Atque cupiditate fuga fugit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 service" id="development-implementation">
                <h5>Development &amp; Implementation</h5>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad adipisci, eaque et impedit incidunt
                    ipsum itaque minima repellendus sequi temporibus tenetur totam vel. Animi deserunt dicta incidunt
                    sint sunt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 service" id="maintenance">
                <h5>Maintenance</h5>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae dolore enim laudantium
                    molestiae nemo quasi quia similique? Deserunt explicabo fugiat hic in ipsam iusto mollitia nulla
                    porro possimus voluptate.</p>
            </div>
        </div>
    </div>
@endsection