<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div class="container text-center">
            <h1 class="py-3">Laravel DC Comics List</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div>
                <a href="{{ route('comics.create') }}">
                    <p>Create a new comic</p>
                </a>
            </div>
            <ul class="d-flex gap-3 flex-wrap">
                @foreach ($comics as $comic)
                    <div class="card" style="width: 18rem;">
                        <div class="cnt-img pt-3">
                            <img src={{ $comic->thumb_img }} class="card-img-top img-fluid" alt={{ $comic->title }}>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center pb-2" style="height: 50px">{{ $comic->title }}</h5>
                            <div class="text-center pt-2">
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Details</a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Update</a>
                            </div>
                            <div class="text-center pt-2">
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </main>
</body>

</html>
