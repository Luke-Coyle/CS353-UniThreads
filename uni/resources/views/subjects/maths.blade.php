@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>Maths</h1>
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
		<a href=/mt103>MT103: Calculus 1</a>
		
	</div>
	<br>
	<div id="mod">
		<a href=/mt201>MT201: Calculus 3</a>
	</div>
	<br>
	<div id="mod">
		<a href=/mt212>MT212 Linear Algebra 2</a>
</div>




</div>
</body>
@endsection