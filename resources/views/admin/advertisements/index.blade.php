@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="co-md-12">
            <h1 class="h3 mb-4 text-gray-800">Create new Advert</h1>
        </div>
    </div>

    <div class="row">
        @foreach($ads as $ad)
            <div class="col-md-4">
                <div class="card">
                    <img src="{!! Storage::disk('s3')->url($ad->url) !!}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            URL: {!! $ad->click_url !!}
                        </p>
                    </div>

                    <div class="card-footer">
                        <div class="btn-group">
                            <a class="btn btn-primary btn-sm" href="{!! route('adverts.edit', [$ad->id]) !!}">Edit</a>
                            {!! Form::open(['method' => 'POST', 'url' => route('adverts.update', [$ad->id])]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger', 'onclick' => 'return confirm("Are your sure ?")']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
