<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\User;
use App\Work;
use App\CategoryWork;

class PageController extends Controller
{
    public function index(){
        $posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'DESC')->paginate(3);
        $works = Work::orderBy('id', 'DESC')->paginate(6);
    	return view('home' , compact('posts', 'works'));
    }

    public function es(){
        App::setlocale('es');
        $posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'DESC')->paginate(3);
        $works = Work::orderBy('id', 'DESC')->paginate(6);
        return view('home' , compact('posts', 'works'));
    }

    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);
    	return view('web.posts', compact('posts'));
    }

    public function post($slug)
    {
    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

    public function work(){
        $categories = CategoryWork::orderBy('name', 'ASC')->get();
        $works = Work::orderBy('id', 'DESC')->paginate(12);
        return view('web.portfolio', compact('works', 'categories'));
    }

    public function categoryWork($slug)
    {   
        $categories = CategoryWork::orderBy('name', 'ASC')->get();
        $category = CategoryWork::where('slug', $slug)->pluck('id')->first();
        $works = Work::where('category_id', $category)
                ->orderBy('id', 'DESC')->paginate(12);

        return view('web.portfolio', compact('works', 'categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)->where('status', 'PUBLISHED')
                ->orderBy('id', 'DESC')->paginate(6);

        return view('web.posts', compact('posts'));
    }

    public function tag($slug)
    {
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        return view('web.posts', compact('posts'));
    }

    public function user($slug)
    {
        $user = User::where('name', $slug)->pluck('id')->first();
        $posts = Post::where('user_id', $user)->where('status', 'PUBLISHED')->orderBy('id', 'DESC')->paginate(6);

        return view('web.posts', compact('posts'));
    }
}
