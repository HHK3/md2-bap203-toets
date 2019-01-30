@extends('layouts.master')

@section('content')
    <section class="sec5">
        <br>
        <h2>Link toevoegen aan database</h2>

        <form action="{{ route('linkies.linkie_save') }}" method="POST"enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="">Title</label><br>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @if($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
                <br>
            </div>

            <div class="form-group">
                <label for="">Description</label><br>
                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                @if($errors->has('description'))
                    <p class="text-danger">{{ $errors->first('description') }}</p>
                @endif
                <br>
            </div>

            <div class="form-group">
                <label for="">Link URL</label><br>
                <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                @if($errors->has('url'))
                    <p class="text-danger">{{ $errors->first('url') }}</p>
                @endif
                <br>
            </div>

            <div class="form-group">
                <input type="file" name="photo"  accept="image/*" />
                @if($errors->has('photo'))
                    <p class="text-danger">{{ $errors->first('photo') }}</p>
                @endif
            </div>

            <button type="submit" class="btn btn-success">Link opslaan</button>
        </form>

    </section>
@endsection

@section('sidebar')
    <ul class="nav flex-column">
        <li class="nav-item"><a href="{{route('home')}}">Homepage</a></li>
        <li class="nav-item"><a href="{{route('linkies.laralinks')}}">Terug naar Laravel Links</a></li>
    </ul>
@endsection