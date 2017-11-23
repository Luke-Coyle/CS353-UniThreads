@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>Computer Science</h1>
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
		<a href="/cs210">CS210: Data Structures & Algorithms</a>
		
	</div>
	<br>
	<div id="mod">
		<a href="/cs320">CS320: Computer Networks</a>
	</div>
	<br>
	<div id="mod">
		<a href=/cs357>CS357: Software Verification</a>
</div>

</div>
</body>
@endsection