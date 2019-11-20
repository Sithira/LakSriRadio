@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md">
                <h3>Add new post</h3>
                <br />
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Add new post
                    </div>

                    {!! Form::open(['method' => 'POST', 'url' => route('posts.store')]) !!}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="title_secondary">Title Secondary</label>
                            <input type="text" class="form-control" name="title_secondary" id="title_secondary">
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Choose image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="btn btn-primary btn-sm">
                            Save
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
@endsection
