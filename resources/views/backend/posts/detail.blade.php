@extends('backendtemplate')
@extends('layouts.app')
@section('title','Post List')

@section('content')
<div class="row">
	<div class="col-md-6"><h1>Post Detail</h1>

		<form class="post">
			<h3>Title : {{$post->title}}</h3>
			<img src="{{asset($post->photo)}}" alt="This is a post photo!" class="img-fluid mb-4" height="200" width="200">
			<h5>Content :{!!$post->content!!}</h5>
		</form>

		<a href="{{route('posts.index')}}" class="btn btn-primary">Back</a>
	</div>
</div>
@endsection