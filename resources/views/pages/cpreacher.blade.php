@extends('layouts.app')
@section('content')
@include('inc.navbar')

<div class="links">
   @include('inc.links')   
</div>
<div id="app">
<div class="main">
    <h3>CREATE A PASTOR</h3><hr>
    <form class="cuser" method="POST" action="/custom/register">
                        {{ csrf_field() }}
        <div class="form-group col-sm-12 {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-sm-2 control-label">Full Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="name" type="text" class="form-control" value="{{ old('name') }}"  id="inputUserFullName" placeholder="Full Name">
            
		
		@if ($errors->has('name'))
             <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
             </span>
        @endif
		
			</div>
        </div>
		
		
        
        <div class="form-group col-sm-12 {{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="col-sm-2 control-label">Username</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="inputUserUsername" placeholder="Username">
            
		@if ($errors->has('username'))
             <span class="help-block">
               <strong>{{ $errors->first('username') }}</strong>
             </span>
        @endif
		
			</div>
        </div>

        <div class="form-group col-sm-12 {{ $errors->has('role') ? ' has-error' : '' }}">
            <label for="role" class="col-sm-2 control-label">User Role</label>
            <div class="col-sm-6 input-group">
            <select name="role" class="form-control">
                <option value="4" selected>Preacher</option> 
             </select>
			
			@if ($errors->has('role'))
             <span class="help-block">
               <strong>{{ $errors->first('role') }}</strong>
             </span>
            @endif
		
            </div>
        </div>

        <div class="form-group col-sm-12 {{ $errors->has('branch') ? ' has-error' : '' }}">
            <label for="branch" class="col-sm-2 control-label">Select TREM Branch:</label>
            <div class="col-sm-6 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <select name="branch"  class="form-control">
                <option value="none" selected disabled>-- Please choose one--</option>
                <option value="1" >Headquarters</option> 
                <option value="2" >Victoria Island</option>
                <option value="3" >Akoka</option>
            </select>
			
			@if ($errors->has('branch'))
             <span class="help-block">
               <strong>{{ $errors->first('branch') }}</strong>
             </span>
			@endif
            </div>
        </div>

        <div class="form-group col-sm-12 {{ $errors->has('mobile') ? ' has-error' : '' }}">
            <label for="phone" class="col-sm-2 control-label">Mobile Phone</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control" id="inputUserPhone" placeholder="e.g 2348010000001">
			
			@if ($errors->has('mobile'))
             <span class="help-block">
               <strong>{{ $errors->first('mobile') }}</strong>
             </span>
			@endif
			
			</div>
        </div>

        <div class="form-group col-sm-12 {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-sm-2 control-label">Email</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="inputUserEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group col-sm-12 {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-sm-2 control-label">Password</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" id="inputUserPassword" placeholder="Password">
             
			 @if ($errors->has('password'))
             <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
             </span>
			@endif
			 
			</div>
        </div>
		
		<div class="form-group col-sm-12">
            <label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Confirm Password">
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection