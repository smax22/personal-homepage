@extends('layouts.master_admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form action="">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" id="author" name="author">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" type="text" id="body" name="body" rows="12"></textarea>
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <textarea class="form-control" type="text" id="excerpt" name="excerpt" rows="4"></textarea>
                </div>
                <div class="checkbox">
                    <label for="allow_comments">
                        <input type="checkbox" id="allow_comments" name="allow_comments">Allow comments
                    </label>
                </div>
                <button class="btn-std" type="submit">Submit</button>
            </form>
        </div>
    </div>

@endsection