<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('title', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }

    public function nuevaPrueba()
    {
        $num = rand(1,999);
        Post::create([
            'title' => 'Titulo' . $num,
            'content' => 'Contenido' . $num,
        ]);
        return redirect()->route('posts.index');
    }

   public function editarPrueba($id)
    {
        $num = rand(1, 1000);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => 'Título ' . $num,
            'content' => 'Contenido ' . $num,
        ]);

        return redirect()->route('posts.show', $id);
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('posts.index');
    }

    public function update(PostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->validated());
        return redirect()->route('posts.show', $post->id);
    }
}
