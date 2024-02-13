@extends('layout.app.app')

@section('title', 'Tous nos services')

@section('content')

    <div class="row">
        @foreach($properties as $property)
            <div class="col-3 mb-4">
                @include('partial.card')
            </div>
        @endforeach
    </div>

    <div class="my-4">
        {{ $properties->links() }}
    </div>

@endsection
