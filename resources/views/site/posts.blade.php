@foreach($posts as $post)
<div>
  <a href="{{asset('/post/'.$post->id)}}">{{$post->title}}</a>
  <p>{{$post->content}}</p>
</div>
@endforeach
