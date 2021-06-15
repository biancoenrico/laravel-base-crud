@extends('layouts.app')

@section('cards')
    <div class="container">
            <div class="row">
                @foreach ($comics as $item)
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <a 
                                    href="{{ route('comics.show' ,['comic' => $item['id']]) }}" 
                                    class="btn btn-primary">Go somewhere
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection