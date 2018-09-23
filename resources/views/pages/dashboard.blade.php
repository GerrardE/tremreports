@extends('layouts.app')
@section('content')

        @include('inc.navbar') 
        <div class="links">
            @include('inc.links')   
        </div>

        <!--div class="container-fluid dashboard">
            <div class="col col-md-3">			
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Entries</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <li class="list-group-item"><span class="badge">253</span> New</li>
                            <li class="list-group-item"><span class="badge">17</span> Deleted</li>
                            <li class="list-group-item"><span class="badge">3</span> Users</li>
                        </ul>
                    </div>
                    </div>
                    <div class="panel panel-default">
                   
                    <div id="collapse2" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item"><span class="badge">12</span> New</li>
                            <li class="list-group-item"><span class="badge">5</span> Deleted</li>
                        </ul>
                    </div>
                    </div>
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Settings</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <ul class="list-group">
                            <li class="list-group-item"><span class="badge">1</span> Users Reported</li>
                            <li class="list-group-item"><span class="badge">5</span> User Waiting Activation</li>
                        </ul>
                    </div>
                    </div>
                </div> 
            </div>
            <div class="col col-md-9">
                <div class="row">
                    <div class="col col-md-5">
                        <h4>Today Stats:</h4>
                        Submissions<span class="pull-right strong">- 15%</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="15"aria-valuemin="0" aria-valuemax="100" style="width:15%">15%</div>
                        </div>
                    
                        1 New Users<span class="pull-right strong">+ 30%</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30"aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
                        </div>
                    
                        359 Downloads<span class="pull-right strong">+ 8%</span>
                            <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:8%">8%</div>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <h4>This Month Stats:</h4>
                            Submissions<span class="pull-right strong">+ 45%</span>
                                <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45"aria-valuemin="0" aria-valuemax="100" style="width:45%">45%</div>
                            </div>
                        
                            5 New Users<span class="pull-right strong">+ 57%</span>
                                <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="57"aria-valuemin="0" aria-valuemax="100" style="width:57%">57%</div>
                            </div>
                        
                            12.593 Downloads<span class="pull-right strong">+ 25%</span>
                                <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25"aria-valuemin="0" aria-valuemax="100" style="width:25%">25%</div>
                            </div>
                </div>
                </div>
            </div>
        </div-->
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