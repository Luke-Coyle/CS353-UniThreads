@extends('layouts.app')



@section('content')
<head>
<title>UNI-Threads</title>

</head>
<div id="title-card">
	<h1>Welcome to UNI-Threads</h1>
	<div>
	<!-- <p>log out  view profile</p>-->
	
<a><span class="glyphicon glyphicon-user"></span>My Profile</a>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
	</div>
</div>


<h2>Subjects</h2>

<ul>
  <li><a href="/english">English</a></li>
  <li><a href="/maths">Maths</a></li>
  <li><a href="/computerscience">Computer Science</a></li>
</ul> 

@endsection