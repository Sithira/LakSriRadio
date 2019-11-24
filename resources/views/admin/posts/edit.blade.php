@extends("layouts.app")

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
        Update Post ID: {!! $post->id !!}
    </h1>

    <div class="row">
        <div class="col-md">
            {!! Form::model($post, ['method' => 'PATCH', 'url' => route('posts.update', [$post->id])]) !!}

            <div class="card">
                <div class="card-header">
                    Update post: {!! $post->title !!}
                </div>
                <div class="card-body">

                    @include("flash::message")

                    <div class="form-group">
                        {!! Form::label('title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('title_secondary') !!}
                        {!! Form::text('title_secondary', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('body') !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="card-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) !!}
                </div>
            </div>

            {!! Form::close() !!}


        </div>
        <div class="col-md"></div>
    </div>
@endsection
