@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                <h1>Let's work together!</h1>
                <form action="">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="mail">Your Mail</label>
                            <input type="email" class="form-control" placeholder="Mail" name="mail" id="mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h6>I'm interested in</h6>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="body">Message</label>
                            <textarea type="text" class="form-control" placeholder="Message" name="body" id="body" rows="12"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button type="submit" class="btn-std">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection