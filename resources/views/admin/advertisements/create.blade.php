@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">
                Create new Advert
            </h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Create
                </div>
                <div class="card-body">
                    <h5 class="card-title">Create new Advert</h5>
                    {!! Form::open(['method' => 'POST', 'url' => route('adverts.store'), 'files' => true]) !!}

                    <div class="form-group">
                        {!! Form::label('click_url', 'Link on click') !!}
                        {!! Form::url('click_url', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('image') !!}
                        <br />
                        {!! Form::file('image') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('end_date') !!}
                        {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                    </div>

                    <br/>
                    <br/>

                    {!! Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md"></div>
    </div>
@endsection
