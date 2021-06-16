@extends('layouts.app')

@section('cards')
    <div class="container" style="margin-top:40px;">
            <div class="row">
                @foreach ($comics as $item)
                    <div class="col-3">
                        <div class="card" style="width: 18rem; padding:20px;">
                            <img class="card-img-top" src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <a 
                                    href="{{ route('comics.show' ,['comic' => $item['id']]) }}" 
                                    class="btn btn-primary">Go to info
                                </a>

                                <a 
                                    href="{{ route('comics.edit' ,['comic' => $item['id']]) }}" 
                                    class="btn btn-primary">edit
                                </a>
                                <br>
                                
                                <form action="{{ route('comics.destroy' ,['comic' => $item['id']]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <input onclick="return confirm('Are you sure to cancel: \n{{ $item['title'] }}?')" type="submit" class="btn btn-danger" style="margin: 20px 0;" value="delete">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection