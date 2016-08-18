@extends('admin.layouts.index')

@section('content')
<section class="content-header">
  <h1>
    NGO
    <small>Dashboard</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> post</a></li>
    <li class="active">update</li>
  </ol>
</section>
<section class="content">
  <!-- start box-header -->
    <div class="box-header with-border">
      <h3 class="box-title">update Post</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{asset('/masterAdmin/post/'.$post->id)}}" enctype="multipart/form-data">
      <input type="hidden" name="_method" value="PUT">
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <select name="category" class="form-control">
            @foreach($categories as $category)
              @if($category->id == $post->category_id)
                <option value="{{$category->id}}" selected>{{$category->name}}</opyion>
              @else
                <option value="{{$category->id}}">{{$category->name}}</opyion>
              @endif
            @endforeach
          </select>
          <label for="exampleTitle">Title</label>
          <input type="text" class="form-control" name='title' id="exampleText" value="{{$post->title}}">
          @if ($errors->has('title'))
              <p><strong class="text-red">{{ $errors->first('title') }}</strong></p>
          @endif
        </div>
        <div class="form-group">
          <label for="exampleContent">content</label>
          <textarea class='form-control' name='editor1' rows="10" >{{$post->content}}</textarea>
          @if ($errors->has('editor1'))
              <p><strong class="text-red">{{ $errors->first('editor1') }}</strong></p>
          @endif
        </div>
        <div class="form-group">
          <label>images input</label>
          <input type="file" name="image">
          @if ($errors->has('image'))
              <p><strong class="text-red">{{ $errors->first('image') }}</strong></p>
          @endif
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</section>
@stop
