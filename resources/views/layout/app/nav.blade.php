<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand text-center" href="/">
            @include('partial.icon', ['class' => 'bi-house'])
            <br>
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $route = request()->route()->getName()
        @endphp
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @class(['nav-link', 'active text-bg-primary btn btn-primary' => str_contains($route, 'property.')]) aria-current="page" href="{{ route('property.index') }}">
                        @include('partial.icon', ['class' => 'bi-gear'])
                        <br>
                        Services
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
