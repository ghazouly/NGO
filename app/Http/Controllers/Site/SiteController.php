<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use App\Category;
use App\Post;

class SiteController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    $posts = Post::take(6)->inRandomOrder()->get();
    return view('site.index')->with('categories',$categories)->with('posts',$posts);
  }

  public function show($id)
  {
    $posts = Post::where('category_id', $id)->get();
    return view('site.posts')->with('posts',$posts);
  }
  public function showPost($id)
  {
    $post = Post::findOrFail($id);
    if ($post) {
      return view('site.showPost')->with('post',$post);
    }
    abort(404);
  }

}
