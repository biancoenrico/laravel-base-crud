@extends('layouts.app')

@section('cards')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $comic->img }}" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection