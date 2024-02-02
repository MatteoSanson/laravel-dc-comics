<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $comic->title }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container text-center py-5">
            <h1>{{ $comic->title }}</h1>
        </div>
    </header>

    <main>
        <div class="container">

            <div class="card mb-3 container-lg">
                <div class="row g-0">
                    <div class="col-md-4 py-3">
                        <img src="{{ $comic->thumb_img }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ $comic->type }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ $comic->price }}$</p>
                            <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                            <p class="card-text"><strong>Description:</strong> {{ $comic->description }}</p>
                            <p class="card-text"><strong>Artists:</strong> {{ $comic->artists }}</p>
                            <p class="card-text"><strong>Writers:</strong> {{ $comic->writers }}</p>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('comics.index') }}" class="py-2">Back to comics list</a>
        </div>
    </main>
</body>

</html>
