@extends('plantilla')
@section('title', 'Crear post')

@section('contenido')
    <h1>Crear post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="content">Contenido</label>
            <textarea name="content" id="content" rows="8">{{ old('content') }}</textarea>
            @error('content')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Crear</button>
    </form>

@endsection
