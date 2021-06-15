@extends('layouts.app')

@section('cards')
    <div class="container">
        <h1>Create new comics</h1>
        <form action="{{ route('comics.store') }}" method="post">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="title">Comics title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="description">Comics description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="img">Comics img</label>
                <input type="text" class="form-control" id="img" name="img">
            </div>

            <div class="form-group">
                <label for="type">Comics type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="form-group">
                <label for="price">Comics price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <input type="submit" value="save" class="btn btn-primary">
        </form>
    </div>
@endsection