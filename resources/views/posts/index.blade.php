@extends('plantilla')
@section('title', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>
<ul>
@foreach ($posts as $post)
    <li>
        {{ $post->title }}

        <a href="{{ route('posts.show', $post->id) }}">
            Ver
        </a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>
<div class="d-flex justify-content-left">
    {{ $posts->links('pagination::bootstrap-5') }}
</div>

@endsection
