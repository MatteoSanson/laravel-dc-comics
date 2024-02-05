@extends('layouts.app')

@section('header')
    <div class="container text-center py-5">
        <h1>Edit {{ $comic->title }}</h1>
    </div>
@endsection

@section('main')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="type" value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="customInput" class="form-label">Date</label>
                    <input type="text" class="form-control" id="customInput" name="sale_date"
                        pattern="[A-Za-z0-9]{4}-[A-Za-z0-9]{2}-[A-Za-z0-9]{2}"
                        value="{{ old('sale_date', $comic->sale_date) }}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">Inserisci una stringa valida nel formato XXXX-XX-XX.</div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists" value="{{ old('artists', $comic->artists) }}">
                @error('artists')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" value="{{ old('writers', $comic->writers) }}">
                @error('writers')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="6">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb_img"
                    value="{{ old('thumb_img', $comic->thumb_img) }}">
                {{-- asd --}}
                @error('thumb_img')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update your data</button>
        </form>
        <div class="py-3">
            <a href="{{ route('comics.index') }}" class="py-2">Back to comics list</a>
        </div>
    </div>
@endsection
