@extends('layout.admin.base')

@section('title', 'Toutes les options')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.options.create') }}" class="btn btn-outline-success me-2 rounded-pill">
            @include('partial.icon', ['class' => 'bi-plus-circle'])
        </a>
    </div>
    <hr>
    <table class="table table-striped">

        <thead>
        <tr>
            <th>Nom</th>
            <th class="text-end">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($options as $option)
            <tr>
                <td>{{ $option->name }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.options.edit', $option) }}" class="btn btn-outline-primary me-2 rounded-pill">
                            @include('partial.icon', ['class' => 'bi-pencil-square'])
                        </a>
                        <form action="{{ route('admin.options.destroy', $option) }}" method="post">
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
    {{ $options->links() }}

@endsection
