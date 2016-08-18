@extends('admin.layouts.index')
@section('content')
<section class="content">
<div class="row">
  <div class="col-md-7">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Adding New User
          <small>Advanced and full of features</small>
        </h3>
      </div>
      <hr>
      <div class="box-body">
        <form method="POST" action="{{ asset('/masterAdmin/user') }}">
            {!! csrf_field() !!}
            <div class="form-group">
              <label for="exampleTitle">Username </label>
              <input class="form-control" type="text" name="username" value="{{old('username')}}">
              @if ($errors->has('username'))
              <p><strong class="color-red">{{ $errors->first('username') }}</strong></p>
              @endif
          </div>
            <div class="form-group">
                <label for="exampleTitle">password</label>
                <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                @if ($errors->has('password'))
                <strong>{{ $errors->first('password') }}</strong>
                @endif
            </div>
            <div class="form-group">
              <label for="exampleTitle">password confirmation</label>
              <input class="form-control" type="password" name="password_confirmation">
              @if ($errors->has('password_confirmation'))
              <strong>{{ $errors->first('password_confirmation') }}</strong>
              @endif
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
