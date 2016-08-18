<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Category;
use DB;

class PostController extends Controller
{
  public function index()
  {
    $posts = DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
                                        ->select('posts.*', 'categories.name')
                                        ->paginate(10);
    return view('admin.post.index')->with('posts',$posts);
  }

  public function create()
  {
    $categories = Category::all();
    return view('admin.post.create')->with('categories', $categories);
  }

  public function store(PostRequest $request)
  {
    $post = new Post;
    $post->title = $request->title;
    $post->content = $request->editor1;
    if (!empty($request->image)) {
      $post->image = upload($request['image'] , 'images/');
    }
    $post->category_id = $request->category;
    $post->save();
    return redirect('/masterAdmin/post');
  }

  public function show($id)
  {
    $post = Post::findOrFail($id);
    if ($post) {
      return view('admin.post.show')->with('post',$post);
    }
    abort(404);
  }

  public function edit($id)
  {
    $categories = Category::all();
    $post = Post::findOrFail($id);
    if ($post) {
      return view('admin.post.update')->with('post',$post)->with('categories',$categories);
    }
    abort(404);
  }

  public function update(PostRequest $request, $id)
  {
    $post = Post::findOrFail($id);
    if ($post) {
      $post->title = $request->title;
      $post->content = $request->editor1;
      if (!empty($request->image)) {
        $post->image = upload($request['image'] , 'images/');
      }
      $post->category_id = $request->category;
      $post->save();
      return redirect('/masterAdmin/post');
    }
    abort(404);
  }

  public function destroy($id)
  {
    $post = Post::findOrFail($id);
    if ($post) {
      $post->delete();
      return redirect()->back();
    }
    abort(404);
  }
}
