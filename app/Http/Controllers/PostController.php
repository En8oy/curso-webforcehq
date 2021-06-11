<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'category_id', 'user_id', 'title', 'slug', 'created_at', 'short')->with([
            'category' => function($query){
                $query->select('id', 'category', 'slug');
            },
            'user' => function($query){
                $query->select('id', 'name', 'username', 'slug');
            } 
        ])->paginate();
        return view('post.index', ['posts' => $posts]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($slug)
    {
        return view('post.show', ['post' => Post::with(['user', 'category'])->where("slug", $slug)->first()]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
