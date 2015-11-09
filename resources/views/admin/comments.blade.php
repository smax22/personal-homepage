@extends('layouts.master_admin')
@inject('comment_repository','App\Http\Contracts\CommentRepositoryInterface')
@section('content')
    @foreach($comment_repository->getAllComments() as $comment)
        <article class="row">
            <div class="col-xs-12">
                <h5>{{ $comment->commentable()->title }}</h5>
                <span>{{ $comment->created_at }}</span>
                <p>{{ $comment->body }}</p>
                [<a href="{{ route('comment.delete', ['comment_id' => $comment->id]) }}">Delete</a>]
                <hr class="separator-blog">
            </div>
        </article>
    @endforeach
@endsection
