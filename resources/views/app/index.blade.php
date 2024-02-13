@extends('layout.app.app')

@section('title', 'Bienvenue')

@section('content')

    <section class="text-center">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ config('app.name') }}</h1>
                <p class="pt-3 lead text-body-secondary">
                    Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet,
                    but not too short so folks don’t simply skip over it entirely.
                </p>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row text-center">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light mb-5">Nos services</h2>
            </div>
        </div>

        <div class="row">
            @foreach($properties as $property)
                <div class="col mb-4">
                    @include('partial.card')
                </div>
            @endforeach
        </div>
    </section>

@endsection
