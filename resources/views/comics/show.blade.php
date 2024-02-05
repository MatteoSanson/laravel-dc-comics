@extends('layouts.app')

@section('header')
    <div class="container text-center py-5">
        <h1>{{ $comic->title }}</h1>
    </div>
@endsection

@section('main')
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

                        <div class="pt-2 d-flex gap-3">
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Update</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('comics.index') }}" class="py-2">Back to comics list</a>
    </div>
@endsection
