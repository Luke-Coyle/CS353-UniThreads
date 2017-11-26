@extends('layouts.app')



@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<!--<h1>This is your profile page</h1>-->
        <a href="/subjects">Go Back to Subjects</a>
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search posts"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
             <span> Search </span>	
            </button>
        </span>
    </div>
</form>
</div>

<div id="content">
	
	<p>Your previous posts and questions.</p>
	@if(count($posts)>0)
	<table id="table">
		<tr>
			<td>Title</td>
			<td></td>
			<td></td>
		</tr>
		@foreach($posts as $post)
			<tr>
				<td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
				<td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
				<td>
						{!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class'=> 'pull-right'])!!}
   						{{Form::hidden('_method', 'DELETE')}}
   						{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
						{!!Form::close()!!}
				</td>
			</tr>
		@endforeach
	</table>
@else
<p> You have no posts </p>

@endif

@if(count($comments)>0)
	<table id="table">
	<h1>***********************Comments***********************</h1>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		@foreach($comments as $comment)
		
			<tr>
				<td><a href="/posts/{{$comment->post_id}}">{!!$comment->body!!}</a></td>
				<td><a href="/comments/{{$comment->id}}/edit" class="btn btn-default">Edit</a></td>
				<td>
						
						<a href="/posts/{{$comment->post_id}}">{{$comment->post->title}}</a>
						
				<td>
				

			</tr>
		
		@endforeach
	</table>

	
@else
<p> You have no posts </p>

@endif


</div>
</body>
@endsection