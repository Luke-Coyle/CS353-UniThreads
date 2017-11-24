@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>{{$post->title}}</h1>
        <img style="width:50%" src="/storage/files/{{$post->files}}">
        <br><br>
     
        <a href="/subjects">Go Back to subjects</a>
</div>
<hr>
<div>

	{!!$post->body!!}
    <hr>
   <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
</div>
@if(Auth::user()->id==$post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class'=> 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endsection