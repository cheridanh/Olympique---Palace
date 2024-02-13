@extends('layout.admin.base')

@section('title', $option->exists ? "Modifier une option" : "Créer une option")

@section('content')

    <div class="container my-5">
        <div class="position-relative p-5 bg-body border border-dashed rounded-5">
            <a href="{{ route('admin.options.index') }}" type="button"
               class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close">
            </a>

            <h1>{{ $option->exists ? 'Modifier : ' . $option->name : 'Créer une option' }}</h1>
            <hr>

            <form class="vstack gap-2"
                  action="{{ route($option->exists ? 'admin.options.update' : 'admin.options.store', $option) }}" method="post">
                @csrf
                @method($option->exists ? 'put' : 'post')

                @include('partial.input', ['label' => 'Nom', 'name' => 'name', 'value' => $option->name])

                <div>
                    @if($option->exists)
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
