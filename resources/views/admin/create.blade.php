@extends('admin.main.app')

@section('content')

 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleTitle">Title</label>
                  <input type="text" class="form-control" name='title' id="exampleText" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="exampleContent">content</label>
                  <textarea class='form-control' name='content' id='exampleContent'></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
             
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


@stop