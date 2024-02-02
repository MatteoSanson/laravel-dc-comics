<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{ $comic->title }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container text-center py-5">
            <h1>Edit {{ $comic->title }}</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="customInput" class="form-label">Date</label>
                        <input type="text" class="form-control" id="customInput" name="sale_date"
                            pattern="[A-Za-z0-9]{4}-[A-Za-z0-9]{2}-[A-Za-z0-9]{2}" value="{{ $comic->sale_date }}">
                        <div class="invalid-feedback">Inserisci una stringa valida nel formato XXXX-XX-XX.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Artists</label>
                    <input type="text" class="form-control" name="artists" value="{{ $comic->artists }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Writers</label>
                    <input type="text" class="form-control" name="writers" value="{{ $comic->writers }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="6">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="text" class="form-control" name="thumb_img" value="{{ $comic->thumb_img }}">
                </div>
                <button type="submit" class="btn btn-primary">Update your data</button>
            </form>
            <div class="py-3">
                <a href="{{ route('comics.index') }}" class="py-2">Back to comics list</a>
            </div>
        </div>

    </main>
</body>

</html>
