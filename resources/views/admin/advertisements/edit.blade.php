@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Create
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Create new Advert</h5>
                        {!! Form::model($advertisment, ['method' => 'POST', ['url' => route('posts.update', ['id' => $advertisment->id])]]) !!}
                            <div class="form-group">
                                {!! Form::label('url', 'Link on click') !!}
                                {!! Form::url('url', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('end_date') !!}
                                {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
@endsection
