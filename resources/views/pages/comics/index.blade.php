@extends('layouts.app')
@section('titolo pagina', 'DC Comics - Comics')
@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $id => $elem)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{route('show.comic', ['id' => $id])}}">
                        <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title">{{ $elem['title'] }}</h5>
                      <p class="card-text">{{ $elem['description'] }}</p>
                    </div>
                  </div>
            </div>                
            @endforeach
        </div>
    </div>
@endsection