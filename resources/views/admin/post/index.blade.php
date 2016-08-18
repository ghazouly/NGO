@extends('admin.layouts.index')

@section('content')
<section class="content-header">
  <h1>
    NGO
    <small>Dashboard</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="col-md-10">
    <a href="{{ asset('/masterAdmin/post/create') }}" class="btn btn-primary">create new post</a>
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Bordered Table</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <th style="width: 10px">#</th>
            <th>post</th>
            <th>category</th>
            <th>actions</th>
          </tr>
            @if(sizeof($posts) > 0)
              <?php $count = 1?>
              @foreach($posts as $post)
              <tr>
                <td>{{$count++}}</td>
                <td><a href="{{asset('masterAdmin/post/'.$post->id)}}">{{$post->title}}</a></td>
                <td>{{$post->name}}</td>
                <td>
                  <form class="inline-form" method="GET" action="{{ url('masterAdmin/post/'. $post->id) }}">
                    <button type="submit"class="glyphicon glyphicon-eye-open" title="show"></button>
                  </form>
                  <form class="inline-form" method="GET" action="{{ url('masterAdmin/post/'. $post->id.'/edit') }}">
                    <button type="submit"class="glyphicon glyphicon-pencil" title="update"></button>
                  </form>

                  <form class="inline-form" action="{{ url('masterAdmin/post/'. $post->id ) }}" method="post">
                    {!! method_field("DELETE") !!}
                    {!! csrf_field() !!}
                    <button type="submit"class="glyphicon glyphicon-remove" title="delete"></button>
                  </form>
                </td>
              </tr>
              @endforeach
            @endif
        </table>
    </div>
  </div>
</div>

@stop
