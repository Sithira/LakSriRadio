@extends('layouts.app')

@section('content')
    <h3 class="h3 mb-4 text-gray-800" style="display: inline-block">All Posts</h3>

    <div class="float-right">
        <a class="btn btn-sm btn-primary" href="{!! route('posts.create') !!}">Create Post</a>
    </div>
    <div class="mt-5"></div>


    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header ">
                        {!! $post->title !!}
                    </div>

                    <img class="card-img-top" src="{!! Storage::drive('s3')->url($post->url) !!}" alt="">

                    <div class="card-body">
                        <div class="card-title">
                            <h3>
                                {!! $post->secondary_title !!}
                            </h3>
                        </div>

                        {!! $post->body !!}
                    </div>

                    <div class="card-footer">
                        <div class="btn-group" role="group">
                            <a href="{!! route('posts.edit', [$post->id]) !!}" class="btn btn-sm btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'url' => route('posts.destroy', [$post->id])]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger', 'onclick' => 'return confirm("Are you sure ?")']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
