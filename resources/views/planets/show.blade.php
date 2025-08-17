<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet->name }}</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            width: 100%;
        }
        .planet-detail {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 0.5em;
            padding: 2em;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .planet-detail h1 {
            margin-top: 0;
            color: #2d3748;
        }
        .planet-detail p {
            margin-bottom: 1em;
            color: #4a5568;
            font-size: 1.1em;
        }
        .back-link {
            display: inline-block;
            margin-top: 1.5em;
            color: #4299e1;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="planet-detail">
            @if($planet->image_url)
                <img src="{{ $planet->image_url }}" alt="Image of {{ $planet->name }}" style="max-width: 100%; height: auto; border-radius: 0.5em; margin-bottom: 1em;">
            @endif
            <h1>{{ $planet->name }}</h1>
            @if($planet->description)
                <p>{{ $planet->description }}</p>
            @endif
            <p><strong>Solar system:</strong> {{ $planet->solar_system }}</p>
            <p><strong>Diameter:</strong> {{ number_format($planet->size_km, 0, '.', ' ') }} km</p>
            <a href="/planets" class="back-link">&larr; Back to the list of planets</a>
        </div>
    </div>
</body>
</html>
