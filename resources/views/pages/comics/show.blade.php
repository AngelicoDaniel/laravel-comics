@extends('layouts.app')

@section('titolo pagina', 'DC Comics - Comic')

@section('main-content')
    <h2>Prodotto: {{ $prodotto_singolo['title'] }}</h2>
    <img src="{{ $prodotto_singolo['thumb'] }}" alt="comic">
@endsection