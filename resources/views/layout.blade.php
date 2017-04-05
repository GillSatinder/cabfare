<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
        ul{
            top:120%;
            padding-top: 2%;

            /*length:120%*/
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" style="padding-top: 2%" >
            <a class="navbar-brand" href="#">CabFare</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">My Details</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Past Trips<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Today Trips</a></li>
                    <li><a href="#">All Trips</a></li>
                    {{--<li><a href="#">ContactUs</a></li>--}}
                </ul>
            </li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Plan Journey</a></li>
            <li><a href="#">Fare Estimator</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>

<div class="container">

</div>

</body>
</html>



@yield('content')