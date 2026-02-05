@extends('plantilla')
@section('title', 'Listado posts')

@section('contenido')
    <h1>Listado de posts</h1>
<ul>
    <a href={{route('posts.nuevaPrueba') }}>
        <button>Crear Post</button>
    </a>
@foreach ($posts as $post)
    <li>
        {{ $post->title }} 
        @if ($post->relUser)
            ({{ $post->relUser->login }})
        @else
            (Sin usuario)
        @endif

        <a href="{{ route('posts.show', $post->id) }}">
            <button>Ver</button>
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
