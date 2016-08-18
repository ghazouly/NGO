@extends('admin.layouts.index')

@section('content')
<section class="content-header">
  <h1>
    NGO
    <small>Dashboard</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>post</li>
    <li class="active">show</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="col-md-10">
    <a href="{{ asset('/masterAdmin/post') }}" class="btn btn-primary">back</a>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Show Post</h3>
      </div>
      <!-- /.box-header -->

      <center>
        <h2>{{$post->title}}</h2>
        <div class="box-body">
        @if($post->image != NULL)
          <img src="{{asset('/images/'.$post->image)}}" style="width:80%; height:20%">
        @endif
        </div>
        <br>
        <p>{{$post->content}}</p>
    </center>
    </div>
  </div>
</div>

@stop
