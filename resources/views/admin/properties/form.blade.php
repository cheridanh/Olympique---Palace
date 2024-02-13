@extends('layout.admin.base')

@section('title', $property->exists ? "Modifier un service" : "Créer un service")

@section('content')

    <div class="container my-5">
        <div class="position-relative p-5 bg-body border border-dashed rounded-5">
            <a href="{{ route('admin.properties.index') }}" type="button"
               class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></a>

            <h1>{{ $property->exists ? 'Modifier : ' . $property->title : 'Créer un service' }}</h1>
            <hr>

            <form class="vstack gap-2"
                  action="{{ route($property->exists ? 'admin.properties.update' : 'admin.properties.store', $property) }}"
                  method="post">
                @csrf
                @method($property->exists ? 'put' : 'post')

                <div class="row">

                    @include('partial.input', ['class' => 'col' , 'label' => 'Titre', 'name' => 'title', 'value' => $property->title])

                    <div class="col row">
                        @include('partial.input', ['class' => 'col' , 'label' => 'Surface', 'name' => 'surface', 'value' => $property->surface])
                        @include('partial.input', ['class' => 'col' , 'label' => 'Prix', 'name' => 'price', 'value' => $property->price])
                    </div>

                </div>

                @include('partial.input', ['type' => 'textarea', 'label' => 'Description', 'name' => 'description', 'value' => $property->description])

                <div class="row">
                    @include('partial.input', ['class' => 'col' , 'label' => 'Pièces', 'name' => 'rooms', 'value' => $property->rooms])
                    @include('partial.input', ['class' => 'col' , 'label' => 'Chambres', 'name' => 'bedrooms', 'value' => $property->bedrooms])
                    @include('partial.input', ['class' => 'col' , 'label' => 'Etage', 'name' => 'floor', 'value' => $property->floor])
                </div>

                <div class="row">
                    @include('partial.input', ['class' => 'col' , 'label' => 'Adresse', 'name' => 'address', 'value' => $property->address])
                    @include('partial.input', ['class' => 'col' , 'label' => 'Ville', 'name' => 'city', 'value' => $property->city])
                    @include('partial.input', ['class' => 'col' , 'label' => 'Code Postal', 'name' => 'postal_code', 'value' => $property->postal_code])
                </div>

                @include('partial.select', ['label' => 'Options', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true])
                @include('partial.checkbox', ['label' => 'Vendu', 'name' => 'sold', 'value' => $property->sold, 'options' => $options])

                <div>
                    @if($property->exists)
                        <button class="btn btn-outline-primary me-2 rounded-pill">
                            @include('partial.icon', ['class' => 'bi-check2-circle'])
                        </button>
                    @else
                        <button class="btn btn-outline-success me-2 rounded-pill">
                            @include('partial.icon', ['class' => 'bi-plus-circle'])
                        </button>
                    @endif
                </div>
            </form>

        </div>
    </div>

@endsection
