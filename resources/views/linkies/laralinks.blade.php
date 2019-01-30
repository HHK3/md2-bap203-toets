@extends('layouts.master')

@section('content')
    @foreach ($links as $link)
        <div>
            <h1>Link {{ $link->id  }}</h1>
            <ul>
                <li>{{ $link-> title }}</li>
                <li><a href="{{ $link->url }}">{{ $link->url }}</a></li>
                <li>{{ $link->description }}</li>
            </ul>
        </div>
    @endforeach
@endsection

@section('sidebar')
    <ul class="nav flex-column">
        <li class="nav-item"><a href="{{route('home')}}">Homepage</a></li>
        <li class="nav-item"><a href="{{route('linkies.linkie_add')}}">Links toevoegen</a></li>
    </ul>
@endsection