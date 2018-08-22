@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="links">
    @include('inc.links')   
</div>
    <!--div id="app"> TERRY, why this div? what stops you from declaring it like so beside the main class below?-->
        <div class="main" id="app">
            <h2 class="page-header">USER MAINTENANCE</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#create">CREATE</a></li>
                <li><a data-toggle="tab" href="#edit">EDIT</a></li>
                <li><a data-toggle="tab" href="#delete">DELETE</a></li>
            </ul>
            
            <div class="tab-content">
                <!-- create user tab starts here -->
                    <div class="tab-pane fade in active" id="create">
                        <h3>CREATE USER</h3><hr>
                        <form class="cuser" method="POST" action="/custom/register">
                            {{ csrf_field() }}

                            <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                                <label for="country" class="col-sm-2 control-label ">Country</label>                
                                <div class="col-sm-6 input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry3" v-model="country" @change=getCountryBranches></select>
                                </div>
                            </div>

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
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
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
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                                    <select name="role" class="form-control">
                                        <option value="none" selected disabled><-- Please choose one --></option>
                                        <option value="1">G12 Leader</option>
                                        <option value="2">Preacher</option>
                                        <option value="3">Pastor</option>
                                        <option value="4">Admin</option>
                                        <option value="5">Head Admin</option>
                                        <option value="6">Super Admin</option>
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
                               <select name="branch"  class="form-control"  v-model="activeBranch" >
                                    <option value="0" selected disabled><-- Please choose one --></option>
                                    <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                                     <option v-if="countryBranches.length==0" value="">No branch to display</option>
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
                <!-- create user tab ends here -->

                <!-- edit user tab starts here -->
                    <div class="tab-pane fade" id="edit">
                        <h3>EDIT USER</h3><hr>
                        <form class="cuser" method="POST" action="/edit/user">
                            {{ csrf_field() }}

                            <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                                <label for="country" class="col-sm-2 control-label ">Country</label>                
                                <div class="col-sm-6 input-group">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry3" v-model="country" @change=getCountryBranches></select>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="suser" class="col-sm-2 control-label">Select User:</label>
                                <div class="col-sm-6 input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <select name="user"  class="form-control" v-model="userId" @change="getUserDetails">
                                        <option value="0" selected disabled><-- Please choose one --></option>
                                         <option v-for="user in allUsers" :value="user.id">@{{user.name}}</option>
                                         <option v-if="allUsers.length==0" value="">No user to display</option>
                                    </select>
                                </div>
                            </div>
                            
                            <p>Now, Edit:</p>
                            <div class="form-group col-sm-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-sm-2 control-label">Full Name</label>                
                                <div class="col-sm-6 input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="name" type="text" class="form-control" v-model="fullName"  id="inputUserFullName" placeholder="Full Name">
                                
                            
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
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                    <input type="text" name="username" v-model="userName" class="form-control" id="inputUserUsername" placeholder="Username">
                                
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
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                                    <select name="role" class="form-control" v-model="userRole">
                                        <option value="none" selected disabled><-- Please choose one --></option>
                                        <option value="1">G12 Leader</option>
                                        <option value="2">Preacher</option>
                                        <option value="3">Pastor</option>
                                        <option value="4">Admin</option>
                                        <option value="5">Head Admin</option>
                                        <option value="6">Super Admin</option>
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
                                <select name="branch"  class="form-control"  v-model="userBranch" >
                                <option value="0" selected disabled><-- Please choose one --></option>
                                <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                                <option v-if="countryBranches.length==0" value="">No branch to display</option>
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
                                    <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control" v-model="userMobile" id="inputUserPhone" placeholder="e.g 2348010000001">
                                
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
                                    <input type="email" value="{{ old('email') }}" class="form-control" name="email" v-model="userEmail"id="inputUserEmail" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <h5><strong>Modify User?</strong></h5>
                                <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-pencil"></i></button>
                                <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cuser">NO</a></button> 
                            </div>
                            
                        </form>
                    </div>
                <!-- edit user tab ends here -->

                <!-- delete user tab starts here -->
                    <div class="tab-pane fade" id="delete">
                        <h3>DELETE USER</h3><hr>
                        <div class="form-group col-sm-12">
                            <label for="suser" class="col-sm-2 control-label">Select User:</label>
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <select name="event"  class="form-control">
                                    <option value="none" selected disabled><-- Please choose one --></option>
                                    <option>Rev. Akintola Oni</option> 
                                    <option>Pastor Sayo Adebayo</option>
                                    <option>Rev. Akaninyene Effiong</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-8">
                            <h5><strong>Delete Forever?</strong></h5>
                            <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-trash"></i></button>
                            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cuser">NO</a></button> 
                        </div>
                    </div>
                <!-- delete user tab ends here -->
            </div>
        </div>
    <!--/div-->
@endsection