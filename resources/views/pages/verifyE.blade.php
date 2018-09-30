@extends('layouts.app')
@section('content')
    @include('inc.navbar')    
    <div class="form-gap"></div>
    <div class="forgotP">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                    <h3><i class="glyphicon glyphicon-lock"></i></h3>
                    <h2 class="text-center">Forgot your password?</h2>
                    <p>Enter your email here.</p>
                    <div class="panel-body">
        
                        <form id="verifyE" role="form" autocomplete="off" class="form" method="post">
        
                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="email" placeholder="Email" class="form-control"  type="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-large">SEND RECOVERY LINK<span><i class="glyphicon glyphicon-send"></i></span></button>
                        </div>
                        <!-- on send email, auto redirect user to login page -->
                        
                        <input type="hidden" class="hide" name="token" id="token" value=""> 
                        </form>
        
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection