@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">
                Create new Post
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            @include('flash::message')
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Add new post
                </div>

                {!! Form::open(['method' => 'POST', 'url' => route('posts.store'), 'files' => true]) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="form-group">
                        <label for="secondary_title">Title Secondary</label>
                        <input type="text" class="form-control" name="secondary_title" id="secondary_title">
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" id="body"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Choose image</label> <br/>
                        <input type="file" name="image" id="image">
                    </div>
                </div>

                <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
        <div class="col-md"></div>
    </div>

@endsection
