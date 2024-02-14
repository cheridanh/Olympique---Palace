@extends('layout.app.app')

@section('title', 'Tous nos services')

@section('content')

    <div class="bg-light mb-5 p-5 text-center rounded-5">
        <form action="" method="get" class="container d-lex gap-2">
            @include('partial.input', ['type' => 'number', 'class' => 'rounded-5', 'placeholder' => 'Budget max', 'name' => 'price', 'value' => ""])
        </form>
    </div>

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
