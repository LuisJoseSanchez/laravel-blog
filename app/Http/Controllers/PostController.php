<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }


    public function index() {
        $posts = Post::all();
        return $posts->toJson();
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return $post->toJson();
    }


    public function update(Request $request, $id) {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
        ];
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post->toJson();
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }

        $post = Post::create($request->except('csrf'));
        return $post->toJson();
    }

    public function destroy($id) {
        Post::destroy($id);
    }
}
