@extends("layouts.app")

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-4 text-gray-800">
                All Sliders
            </h1>
        </div>
    </div>

    <div class="row">
        @foreach($sliders as $slide)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {!! $slide->main_text !!}
                    </div>

                    <div class="card-body">

                        <img class="card-img-top" src="{!! Storage::disk('s3')->url($slide->url) !!}"
                             alt="{!! $slide->id !!}">

                        <br/>
                        <br/>

                        <p>Main text: {!! $slide->main_text !!}</p>
                        <p>Secondary text: {!! $slide->secondary_text !!}</p>
                    </div>

                    <div class="card-footer">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary btn-sm"
                               href="{!! route('sliders.edit', [$slide->id]) !!}">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'url' => route('sliders.destroy', [$slide->id])]) !!}
                            {!! Form::submit('Remove slide', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("Are you sure ?")']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
