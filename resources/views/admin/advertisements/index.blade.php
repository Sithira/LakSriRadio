@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>All Advertisements</h3>
            </div>
        </div>

        <br />
        <br />

        <div class="row">
            @foreach($ads as $ad)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{!! $ad->url !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                URL: {!! $ad->click_url !!}
                            </p>
                        </div>

                        <div class="card-footer">
                            <div class="btn-group">
                                <a class="btn btn-primary btn-sm" href="{!! route('advst.edit', ['id' => $ad->id]) !!}">Edit</a>
                                {!! Form::open(['method' => 'POST', 'url' => route('advst.update', ['id' => $ad->id])]) !!}
                                    {!! Form::submit('Save...', ['class' => 'btn btn-sm btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
