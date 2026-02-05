@extends('plantilla')

@section('title', 'Ficha posts')

@section('contenido')
<h2>{{ $post->title }}</h2>

<p>{{ $post->content }}</p>

<p>
    <strong>Creado:</strong>
    {{ $post->created_at->format('d/m/Y H:i') }}
</p>
<a class="" href="{{ route('posts.edit', $post->id) }}">
        <button>Editar Post</button>
    </a>

<a href="{{ route('posts.index') }}">Volver</a>

@endsection