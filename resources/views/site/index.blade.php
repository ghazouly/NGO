<html>
<body>
@foreach($categories as $category)
  <a href="{{asset('/cate/'.$category->id)}}">{{$category->name}}</a>
@endforeach

@foreach($posts as $post)
<div>
  <a href="{{asset('/post/'.$post->id)}}">{{$post->title}}</a>
  <p>{{$post->content}}</p>
</div>
@endforeach
</body>
</html>
