<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 2em;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
        }
        h2 {
            color: #1a202c;
        }
        hr {
            border: none;
            border-top: 1px solid #e2e8f0;
            margin: 1.5em 0;
        }
        .planet-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5em;
        }
        .planet-card {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 0.5em;
            padding: 1.5em;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s;
        }
        .planet-card:hover {
            transform: translateY(-5px);
        }
        .planet-card h3 {
            margin-top: 0;
            color: #2d3748;
        }
        .planet-card p {
            margin-bottom: 0.5em;
            color: #4a5568;
        }
        .planet-card a {
            color: #4299e1;
            text-decoration: none;
            font-weight: bold;
        }
        .planet-card a:hover {
            text-decoration: underline;
        }
        .no-planets {
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>List of all known planets</h2>
        <hr>
        <div class="planet-list">
            @forelse($planets as $planet)
                <div class="planet-card" id="planet-card-{{ $planet->id }}">
                    <h3>{{ $planet->name }}</h3>
                    <p>Solar system: {{ $planet->solar_system }}</p>
                    <p>Diameter: {{ number_format($planet->size_km, 0, '.', ' ') }} km</p>
                    <a href="{{ route('planets.show', ['planet' => $planet->id]) }}">Find out more &rarr;</a>
					<button class="delete-btn" data-id="{{ $planet->id }}" data-url="/api/planets/{{ $planet->id }}">
						Write off
					</button>
                </div>
            @empty
                <p class="no-planets">There are no planets in the database. Please run the seeders.</p>
            @endforelse
        </div>
    </div>

    <script src="{{ asset('js/planets.js') }}" defer></script>
</body>
</html>
