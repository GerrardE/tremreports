@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
        <h2 class="page-header">BRANCH MAINTENANCE</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#create">CREATE</a></li>
            <li><a data-toggle="tab" href="#edit">EDIT</a></li>
            <li><a data-toggle="tab" href="#delete">DELETE</a></li>
        </ul>

        <div class="tab-content">
        <!-- create branch tab starts here -->
            <div id="create" class="tab-pane fade in active">
                <form class="cbranch" method="POST" action="/save/branch">
                    {{ csrf_field() }}
                    
                    <h3>CREATE BRANCH</h3><hr>
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label ">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry"v-model="country" @change="getCountryZones"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">Select State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry" name="state"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="zone" class="col-sm-2 control-label">Select Zone:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <select name="zone"  class="form-control" v-model="activeZone" @change="getZoneName">
                            <option value="none" selected disabled><-- Please choose one --></option>
                            <option v-for="zone in countryZones" :value="zone.id">@{{zone.name}}</option> 
                            <option v-if="countryZones.length==0" value="" >Zone not available</option> 
                        </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city" class="col-sm-2 control-label" >City</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control" id="inputCity" placeholder="City">
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-sm-2 control-label" >Address</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="inputAddress" placeholder="ie, #15 Gerrard Street, Obanikoro">
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="branchName" class="col-sm-2 control-label">Branch Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputBranchName" placeholder="Branch Name">
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
                        <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
                    </div>
                    
                </form>
            </div>
        <!-- create branch tab ends here -->

        <!-- edit branch tab starts here -->
            <div id="edit" class="tab-pane fade">
                <h3 class="page-header">EDIT BRANCH</h3>
                <form class="ebranch" method="POST" action="/edit/branch">
                    {{ csrf_field() }}
                    
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label ">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry3" v-model="country" @change=getCountryBranches></select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-sm-12">
                        <label for="branch" class="col-sm-2 control-label">Select Branch:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name="branch"  class="form-control"  v-model="activeBranch" @change="getActiveBranch">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                            <option v-if="countryBranches.length==0" value="">No branch to display</option>
                        </select>
                        </div>
                    </div>

                    <p>Now, Edit details</p>
                    

                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">Edit State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry3" name="state" v-model="activeState" ></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="zone" class="col-sm-2 control-label">Edit Zone:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <select name="zone"  class="form-control" v-model="activeZone" @change="getZoneName">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="zone in countryZones" :value="zone.id">@{{zone.name}}</option> 
                            <option v-if="countryZones.length==0" value="" >Zone not available</option> 
                        </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city" class="col-sm-2 control-label">Edit City</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" name="city"  class="form-control" id="inputCity" v-model="activeBranchCity" placeholder="City">
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-sm-2 control-label">Edit Address</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                            <input type="text" name="address"  class="form-control" id="inputAddress" v-model="activeBranchAddress" placeholder="ie, #15 Gerrard Street, Obanikoro">
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="branchName" class="col-sm-2 control-label">Edit Branch Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                            <input type="text" name="name"  class="form-control" id="inputBranchName" v-model="activeBranchName" placeholder="Branch Name">
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
                        <h5><strong>Modify Branch?</strong></h5>
                        <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-send"></i></button>
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cbranch">NO</a></button> 
                    </div>
                    
                </form>
            </div>
        <!-- edit branch tab ends here -->

        <!-- delete branch tab starts here -->
            
                <div id="delete" class="tab-pane fade">
                <form class="dbranch">
                    <h3 class="page-header">DELETE BRANCH</h3>
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country" id="inputCountry"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">Select State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry" name="state"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <!-- Load all branches -->
                        <label for="branch" class="col-sm-2 control-label">Select Branch:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name="branch"  class="form-control">
                            <option value="none" selected disabled><-- Please choose one --></option>
                            <option value="1">Headquarters</option> 
                            <option value="2">Victoria Island</option>
                            <option value="3">Akoka</option>
                        </select>
                        </div>
                    </div>
                
                    <div class="col-sm-8">
                        <h5><strong>Delete Forever?</strong></h5>
                        <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-send"></i></button>
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cbranch">NO</a></button> 
                    </div>
                </form>
                </div>
            
        <!-- delete branch tab ends here -->
        </div>
    
    </div>
@endsection