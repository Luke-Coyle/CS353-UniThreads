@extends('layouts.app')

@section('content')
        <div id = "container">
        <div id = "logo">
        <h1>Welcome to Uni-Threads!</h1>  <!-- I imagine we would want both of these lines centered for this page -->
        <h3>A private forum for university students to learn from and help eachother<h3>
        </div>
        @if(Auth::guest())
        <div id = "buttons">
        <a href="/register">Sign Up</a> <a href="/login">Log in</a> <!-- These buttons need to be styled. -->
        </div>

        <div id = "unimail">
            <p1>Please sign up with your university email to access the forums</p1>
        </div>
        @endif

         @if(Auth::user())
        <div id = "buttons">
        <a href="/subjects">Go to Subjects</a> 
        
        <a href="/profile">Go to your profile</a>
        
        <br>

        <p>You are currently logged in as {{Auth::user()->name}}</p>
        </div>
        @endif
        <!-- I'm going to leave it to dallen or ela to format the page so the buttons appear separate from the proceeding line. -->


        <!-- If anybody thinks the wording on this page should be redone please feel free to do it and just add a comment with date/times of update and who it was by just so we can keep track-->
        </div>
@endsection