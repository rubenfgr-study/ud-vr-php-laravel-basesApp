<h1>Frutas</h1>

<h3><a href="{{ route('fruits.create') }}">Create fruit</a></h3>

@if (session('status'))
    <p style="background-color: green; color: white">
        {{ session('status') }}
    </p>
@endif

@if (!is_null($fruits) && !empty($fruits))
    <ul>
        @foreach ($fruits as $fruit)
            <li>
                <a href="{{ route('fruits.detail', ['id' => $fruit->id]) }}">
                    {{ $fruit->nombre }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
