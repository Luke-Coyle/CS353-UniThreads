@extends('layouts.app')

@section('content')

        <div class = "container">
            <div class = "row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel">
                        @component('components.who')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>

        <div id = "container">
            <div id = "logo">
                <h1>Welcome to Uni-Threads!</h1>  <!-- I imagine we would want both of these lines centered for this page -->
                <h3>A private forum for university students to learn from and help each other<h3>
            </div>
            @if(Auth::guest())
            <div id = "buttons">
                <a href="/register">Sign Up</a> <a href="/login">Log in</a> <!-- These buttons need to be styled. -->
            </div>
            @endif
            <!-- I'm going to leave it to dallen or ela to format the page so the buttons appear separate from the proceeding line. -->
            @if(Auth::user())
            <div id = "buttons">
                <a href="/subjects">subjects</a><!-- These buttons need to be styled. -->
            </div>
            @endif

            <div id = "unimail">
                <p1>Please sign up with your university email to access the forums</p1>
            </div>
        <!-- If anybody thinks the wording on this page should be redone please feel free to do it and just add a comment with date/times of update and who it was by just so we can keep track-->
        </div>

        

@endsection