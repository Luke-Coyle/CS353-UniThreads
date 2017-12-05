@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>Create new Post</h1>
        {!! Form::open(['action'=>'PostsController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}
            </div> 
            <div class="form-group">
                {{Form::label('module', 'Module')}}
                <!--{{Form::select('module',['cs210'=>'CS210', 'cs320'=>'CS320', 'cs357'=>'CS357','en101'=>'EN101','en203'=>'EN203','en260'=>'EN260','mt103'=>'MT103','mt201'=>'MT201','mt212'=>'MT212'])}} -->
                {{Form::text('module', '', ['class' => 'form-control', 'placeholder'=>'Module'])}}
            </div> 
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder'=>'Share your knowledge here!'])}}
            </div> 
            <div class="form-group">
                {{Form::file('files')}}
            </div>

            {{Form::submit('Submit', ['class'=>'btn-primary'])}}
        {!! Form::close() !!}

</div>



@endsection