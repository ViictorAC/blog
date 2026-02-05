@extends('plantilla')
@section('title', 'Editar post')

@section('contenido')
    <h1>Editar post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="content">Contenido</label>
            <textarea name="content" id="content" rows="8">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Guardar</button>
    </form>

@endsection
