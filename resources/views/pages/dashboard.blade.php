@extends('layouts.app')
@section('content')

        @include('inc.navbar') 
        <div class="links">
            @include('inc.links')   
        </div>

        <div class="header">
            <center><h1>Welcome!</h1></center>
            <center><h4>This is the official TREM world entries platform. You can perform various actions by accessing contents via displayed links. Shalom!</h4></center>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/A-new-tribe-flyer-900-x-300.jpg" alt="First slide">
                </div>
                <div class="item">
                    <img src="images/image1.jpg" alt="Second slide">
                </div>
                <div class="item">
                    <img src="images/Kingdom-Night-July-2018-Web-Banner24145.png" alt="Third slide">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    
@endsection