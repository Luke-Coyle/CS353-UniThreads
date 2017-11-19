@extends('layouts.app')

@section('content')
<html>
<head>
<meta charset ="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
        <div class = "container">
            <div class = "row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel">
                        @component('components.who')  <!--Used for debugging -->
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>

        <div id = "container">
            <div class = "jumbotron" id = "logo">
                <h1>Welcome to Uni-Threads!</h1>  <!-- I imagine we would want both of these lines centered for this page -->
                <h3>A private forum for university students to learn from and help each other<h3>
            </div>
            
            <div id = "buttons">
                <p class = "lead"><a href="/register">Sign Up</a> <a href="/login">Log in</a> </p><!-- These buttons need to be styled. -->
            </div>
            <!-- I'm going to leave it to dallen or ela to format the page so the buttons appear separate from the proceeding line. -->

            <div id = "unimail">
                <p1>Please sign up with your university email to access the forums</p1>
            </div>
        <!-- If anybody thinks the wording on this page should be redone please feel free to do it and just add a comment with date/times of update and who it was by just so we can keep track-->
        </div>

        

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
@endsection