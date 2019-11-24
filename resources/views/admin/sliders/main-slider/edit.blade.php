@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">
                Edit Slider: #{!! $slider->id !!}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            @include('flash::message')
            {!! Form::model($slider, ['method' => 'PATCH', 'url' => route('sliders.update', [$slider->id]), 'files' => true]) !!}
            <div class="card">
                <div class="card-header">
                    Edit Slider : #{!! $slider->id !!}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        {!! Form::label('main_text') !!}
                        {!! Form::text('main_text', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('secondary_text') !!}
                        {!! Form::text('secondary_text', null, ['class' => 'form-control']) !!}
                    </div>

                </div>

                <div class="card-footer">
                    {!! Form::submit('Save...', ['class' => 'btn btn-sm btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md"></div>
    </div>
@endsection
