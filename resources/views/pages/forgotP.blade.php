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
                    <h2 class="text-center">Forgot Password?</h2>
                    <p>You can reset your password here.</p>
                    <div class="panel-body">
                        <!-- they get the link to this page via email -->
                        <form id="register-form" role="form" autocomplete="off" class="form" method="post">
        
                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="email" placeholder="Email" class="form-control"  type="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
                            <input id="pin" name="pin" placeholder="Enter Your Pin" class="form-control"  type="pin">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="newPassword" name="newPassword" placeholder="New Password" class="form-control"  type="newPassword">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password" class="form-control"  type="confirmPassword">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-large">RESET PASSWORD<span><i class="glyphicon glyphicon-send"></i></span></button>
                        </div>
                        <!-- on password reset successful, auto redirect user to login page -->
                        
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