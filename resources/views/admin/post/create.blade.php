@extends('admin.layouts.index')

@section('content')
<section class="content">
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">New post
          <small>Advanced and full of features</small>
        </h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form method="POST" action="{{asset('/masterAdmin/post')}}" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="exampleTitle">category</label>
            <select name="category" class="form-control">
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</opyion>
              @endforeach
            </select>
            @if ($errors->has('category'))
                <p><strong class="text-red">{{ $errors->first('category') }}</strong></p>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleTitle">Title</label>
            <input type="text" class="form-control" name='title' value="{{old('title')}}" placeholder="Enter title" >
            @if ($errors->has('title'))
                <p><strong class="text-red">{{ $errors->first('title') }}</strong></p>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleTitle">Content</label>
            <textarea id="editor1" name="editor1" class="form-control" value="{{old('editor1')}}" rows="10" placeholder="write somthing here"></textarea>
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
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col-->
</div>
</section>
@stop
