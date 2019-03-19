<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name' , 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name' , 'ASC')->get();
        return view('admin.posts.create' , compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PosTstoreRequest $request)
    {
        $post = Post::create($request->all());

        if($request->file('file')){

            $post->file =  $request->file('file')->store('public');

            $post->save();
           // $path =  Storage::disk('public')->put('img', $request->file('file'));
            //$post->fill(['file'=> asset($path)]);
        }

        return redirect()->route('posts.edit', $post->id)->with('info', 'Post created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        $categories = Category::orderBy('name' , 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name' , 'ASC')->get();

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();
        if($request->file('file')){

            $post->file =  $request->file('file')->store('public');

            $post->save();
        }
        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Post updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('pass', $post);
        $post->delete();
        return back()->with('info', 'Post eliminated succesfully');
    }
}
