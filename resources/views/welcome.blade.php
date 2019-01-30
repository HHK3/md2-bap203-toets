@extends('layouts.master')

@section('content')
    <h1>BAP 203</h1>
    <p><img src="{{ asset('images/programming.jpg') }}" class="img-fluid" alt="Programming"></p>
    <p>
        Veel succes met de toets, probeer zoveel mogelijk zelf uit te zoeken.<br/>
        Gebruik <a href="https://www.google.com/" target="_blank">Google</a>, <a href="https://laravel.com/docs" target="_blank">de Laravel docs</a>, de code uit eerdere projecten.
    </p>
    <p>
        <a href="https://docs.google.com/document/d/1C_XkaVE3fhWkPN890uh-4N0wa-bwZAsbVaur1gXbL34/edit?usp=sharing" target="_blank">De digitale versie van de opdracht vind je hier.</a>
    </p>
    <p>
    <a href="{{ route('help') }}">Hier staan een aantal foutmeldingen en de mogelijke oplossingen</a> om je te helpen in nood.
        Lees goed de foutmeldingen als je die krijgt, vaak is het een typfout, of heb je de syntax van de code niet helemaal goed.<br />
        Ook hoofdletter en kleine letters maken uit.
    </p>
@endsection

@section('sidebar')
    <ul class="nav flex-column">
        <li class="nav-item"><a href="{{route('linkies.laralinks')}}">Laravel Links</a></li>
        <li class="nav-item"><a href="{{route('linkies.linkie_add')}}">Link toevoegen</a></li>
    </ul>
@endsection
