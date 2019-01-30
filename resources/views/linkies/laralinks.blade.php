@extends('layouts.master')

@section('content')
    {{--@foreach ($links as $link)--}}
        {{--<div>--}}
            {{--<h1>Link {{ $link->id  }}</h1>--}}
            {{--<ul>--}}
                {{--<li>{{ $link-> title }}</li>--}}
                {{--<li><a href="{{ $link->url }}">{{ $link->url }}</a></li>--}}
                {{--<li>{{ $link->description }}</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endforeach--}}

    <div class="gallery">
        @forelse ($links as $link)
            <div class="link">
                <img src="{{ asset('uploadphotos/'. $link->photo) }}" class="imageGallery" alt="{{$link->photo}}">
                <div class="info">
                    <h2>{{$link->title}}</h2>
                    <h5>{{$link->description}}</h5>
                    <a href="{{$link->url}}">Linkie</a>
                </div>
            </div>
        @empty
            <p>Leeg</p>
        @endforelse
    </div>
@endsection

@section('sidebar')
    <ul class="nav flex-column">
        <li class="nav-item"><a href="{{route('home')}}">Homepage</a></li>
        <li class="nav-item"><a href="{{route('linkies.linkie_add')}}">Links toevoegen</a></li>
    </ul>
@endsection