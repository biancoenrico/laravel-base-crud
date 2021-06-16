@extends('layouts.app')

@section('cards')
    <div class="container">
        <h1>Create new comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="title">Comics title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="description">Comics description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="5">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="img">Comics img</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ old('img') }}">
            </div>

            <div class="form-group">
                <label for="type">Comics type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
            </div>

            <div class="form-group">
                <label for="price">Comics price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>
            <input type="submit" value="save" class="btn btn-primary">
        </form>
    </div>
@endsection