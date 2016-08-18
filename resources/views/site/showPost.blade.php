<center>
  <h2>{{$post->title}}</h2>
  <div class="box-body">
  @if($post->image != NULL)
    <img src="{{asset('/images/'.$post->image)}}" style="width:80%; height:45%">
  @endif
  </div>
  <br>
  <p>{{$post->content}}</p>
</center>
