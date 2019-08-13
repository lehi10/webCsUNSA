<?php

namespace webCS\Http\Controllers\Blog;

use Illuminate\Http\Request;
use webCS\Http\Controllers\Controller;

use webCS\Post;
use webCS\Category;
use webCS\Tag;

class PageController extends Controller
{
    //
    public function index()
    {
        $posts= Post::orderBy('id','DESC')->where("status","PUBLISHED")->paginate(8);
        return view("blog/index",compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug',$slug)->first();
        return view('blog/post',compact('post'));

    }
    
    public function category($slug){
        $category   = Category::where('slug',$slug)->pluck('id')->first();
        $posts       = Post::where('category_id',$category)
                            ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(8);
            
        return view('blog/index',compact('posts'));
        
    }
    
    public function tag($slug){
        
        $posts       = Post::whereHas('tags',function($query) use($slug){
            $query->where('slug',$slug);
        })->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(8);
            
        return view('blog/index',compact('posts'));
        
    }
    
}

