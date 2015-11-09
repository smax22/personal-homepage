@extends('layouts.master_admin')

@inject('post_repository','App\Http\Contracts\PostRepositoryInterface')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <a class="btn-std" href="{{ route('post.create') }}">New Post</a>
            <a href="#" class="btn-std" data-toggle="modal" data-target="#add_relation_modal">Add Relationship</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            @if(Session::has('failure'))
                <section class="alert alert-danger">
                    {{ Session::get('failure') }}
                </section>
            @elseif(Session::has('success'))
                <section class="alert alert-success">
                    {{ Session::get('success') }}
                </section>
            @endif
        </div>
    </div>
    @foreach($post_repository->getAllPosts() as $post)
        <article class="row">
            <div class="col-xs-12">
                <h5><a href="{{ route('post.view', ['post_id' => $post->id]) }}">{{ $post->title }}</a></h5>
                <a href="{{ route('post.change_publish', ['id' => $post->id, 'state' => $post->published ? 0 : 1]) }}">
                    {{ $post->published ? 'Published' : 'Unpublished' }}</a> |
                <span>{{ count($post->comments) }} Comments</span> |
                [<a href="{{ route('post.edit', ['post_id' => $post->id]) }}">Edit</a>] |
                [<a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>]
                <p>{{ $post->excerpt }}</p>
                <h6>Related Posts</h6>
                @foreach($post->related_posts as $related_post)
                    <div class="related-posts">
                        <article>
                            <p>{{ $related_post->title }} [<a
                                        href="{{ route('post.remove_relation', ['source_post_id' => $post->id, 'target_post_id' => $related_post->id]) }}">Remove
                                    relation</a>]</p>
                        </article>
                    </div>
                @endforeach

                <hr class="separator-blog">
            </div>
        </article>
    @endforeach

    <div class="modal fade" id="add_relation_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add new relation</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('post.add_relation') }}" method="post">

                        <select name="source-post" id="source-post" class="form-control">
                            @foreach($post_repository->getAllPosts() as $post)
                                <option name="src-post-id" id="src-post-id-{{ $post->id }}">{{ $post->id }}
                                    | {{ $post->title }}</option>
                            @endforeach
                        </select>
                        <select name="target-post" id="target-post" class="form-control">
                            @foreach($post_repository->getAllPosts() as $post)
                                <option name="target-post-id" id="rel-post-id-{{ $post->id }}">{{ $post->id }}
                                    | {{ $post->title }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <button type="submit" class="btn-std">Add Relation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
