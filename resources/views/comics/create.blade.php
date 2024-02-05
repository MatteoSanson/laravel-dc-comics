@extends('layouts.app')

@section('header')
    <div class="container text-center py-5">
        <h1>Add a new comic</h1>
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

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" required
                    value="{{ old('series') }}">
                @error('series')
                    <div class="alert
                    alert-danger">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" required
                    value="{{ old('type') }}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" required
                    value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label for="customInput" class="form-label">Date</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="customInput"
                        name="sale_date" pattern="[A-Za-z0-9]{4}-[A-Za-z0-9]{2}-[A-Za-z0-9]{2}" placeholder="XXXX-XX-XX"
                        value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" required
                    value="{{ old('artists') }}">
                @error('artists')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" required
                    value="{{ old('writers') }}">
                @error('writers')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="6">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" class="form-control @error('thumb_img') is-invalid @enderror" name="thumb_img"
                    value="{{ old('thumb_img') }}">
                @error('thumb_img')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="py-3">
            <a href="{{ route('comics.index') }}" class="py-2">Back to comics list</a>
        </div>
    </div>
@endsection
