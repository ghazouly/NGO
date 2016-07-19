@extends('app')

@section('title')
{{$title}}
@endsection

@section('content')
	@if(Session::has('confirm'))
<div class="alert alert-danger">
	{!! Session::pull('confirm') !!}
</div>
@endif
@if ( !$posts->count() )
There is no post till now. Login and write a new post now!!!
@else
<div class="ajax">
	@include('_posts')
		<a href="#" class="readAllPosts">read more</a>
</div>
@endif

<script>
	$(document).on('click','.readAllPosts',function(e){
		e.preventDefault();

		$.ajax({
			url:"{!! url('readMorePosts') !!}",
			datatype:'json',
			data:{'_token':'{!! csrf_token() !!}'},
			type:'post',
			success:function(data){
				$('.ajax').html(data);
			}
		});
	});
</script>

@endsection
