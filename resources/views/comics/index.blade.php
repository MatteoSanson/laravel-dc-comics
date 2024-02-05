@extends('layouts.app')

@section('header')
    <div class="container text-center">
        <h1 class="py-3">Laravel DC Comics List</h1>
    </div>
@endsection

@section('main')
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
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Details</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Update</a>
                        </div>
                        <div class="text-center pt-2">
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endsection

</html>
