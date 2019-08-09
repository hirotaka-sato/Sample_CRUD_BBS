<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\Bookdetail;
use App\Publisher;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Author::orderBy('created_at', 'desc')->paginate(2);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'name' => 'required|max:100',
            'kana' => 'required|max:100',
        ]);

        Author::create($params);

        return redirect('/');
    }

    public function show($id)
    {
        $post = Author::find($id);
        $books = Author::find($id)->books;


        return view('posts.show', [
            'post' => $post,
            'books' => $books,
        ]);
    }

    public function edit($id)
    {
        $post = Author::findOrFail($id);

        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update($id, Request $request)
    {
        $params = $request->validate([
            'name' => 'required|max:100',
            'kana' => 'required|max:100',
        ]);

        $post = Author::findOrFail($id);
        $post->fill($params)->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy($id)
    {
        $post = Author::findOrFail($id);

        \DB::transaction(function () use ($post) {
            $post->delete();
        });

        return redirect()->route('top');
    }
}
