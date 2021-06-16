@extends('layouts.app')

@section('cards')

    <div class="container">
        <h1>edit comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update',['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Comics title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic['title'] }}">
            </div>

            <div class="form-group">
                <label for="description">Comics description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="5">{{ $comic['description'] }}</textarea>
            </div>

            <div class="form-group">
                <label for="img">Comics img</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ $comic['img'] }}">
                <img style="width:100px; height:150px; margin:20px;" src="{{ $comic['img'] }}" alt="">
            </div>

            <div class="form-group">
                <label for="type">Comics type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic['type'] }}">
            </div>

            <div class="form-group">
                <label for="price">Comics price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic['price'] }}">
            </div>

            <input type="submit" value="save changes" class="btn btn-primary">
        </form>
    </div>

@endsection