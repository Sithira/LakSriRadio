{!! Form::model($post, ['method' => 'POST', 'url' => route('posts.edit', ['id' => $post->id])]) !!}
    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title_secondary') !!}
        {!! Form::text('title_secondary', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-control">
        {!! Form::label('body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-control">
        {!! Form::label('image', 'image to upload') !!}
        {!! Form::file('image') !!}
    </div>

    <br />
    <br />

    <div class="form-control">
        {!! Form::submit('Save') !!}
    </div>
{!! Form::close() !!}
