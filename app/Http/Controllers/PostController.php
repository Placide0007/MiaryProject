<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(5);
        return view("post.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $imgpath = null;
        if($request->hasFile('image'))
        {
            $imgpath = $request->file('image')->store('images','public');
        }
        Post::create([
            'content'=> $request->content,
            'user_id'=> Auth::id(),
            'image' => $imgpath ?? null
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('comments.user')->findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        $post->comments()->delete();

        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('posts.index',compact('post'));
    }

    public function toggleLike(Post $post){
        $reaction = $post->reactions()->where('user_id', Auth::id())->first();
        if($reaction){
            $reaction->liked  = ! $reaction->liked;
            $reaction->save();
        }
        else{
            $post->reactions()->create([
                'liked' => true ,
                'user_id' => Auth::id()
            ]);
        }

        return back();
    }
}
