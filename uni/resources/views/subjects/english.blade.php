@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>

</head>
<div>
	<!-- <p>log out  view profile</p>-->
		<h1>English</h1>
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
	
	
	<h2>Modules</h2><!-- Title to show what page you are on -->
	
	<div id="mod">
		<a href="/en101">EN101: Foundation English</a>
		
	</div>
	<br>
	<div id="mod">
		<a href=/en203>EN203: Literary Forms</a>
	</div>
	<br>
	<div id="mod">
		<a href=/en260>EN260: Classic Literature</a>
	</div>
		



</div>
</body>
@endsection