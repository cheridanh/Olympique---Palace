@extends('layout.admin.base')

@section('title', 'Tous les services')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-outline-success me-2 rounded-pill">
            @include('partial.icon', ['class' => 'bi-plus-circle'])
        </a>
    </div>
    <hr>
    <table class="table table-striped">

        <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th class="text-end">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($properties as $property)
            <tr>
                <td>{{ $property->title }}</td>
                <td>{{ $property->surface }} m²</td>
                <td>{{ number_format($property->price, thousands_separator: ' ') }} &euro;</td>
                <td>{{ $property->city }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.properties.edit', $property) }}" class="btn btn-outline-primary me-2 rounded-pill">
                            @include('partial.icon', ['class' => 'bi-pencil-square'])
                        </a>
                        <form action="{{ route('admin.properties.destroy', $property) }}" method="post">
                            @csrf
                            @method("delete")
                            <button class="btn btn-outline-danger me-2 rounded-pill">
                                @include('partial.icon', ['class' => 'bi-trash3'])
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <hr>
    {{ $properties->links() }}

@endsection
