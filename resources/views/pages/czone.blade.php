@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main">
        <h2 class="page-header">ZONE MAINTENANCE</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#create">CREATE</a></li>
            <li><a data-toggle="tab" href="#edit">EDIT</a></li>
            <li><a data-toggle="tab" href="#delete">DELETE</a></li>
        </ul>

        <div class="tab-content">
        <!-- create zone tab starts here -->
            <div id="create" class="tab-pane fade in active">
                <form class="czone" method="POST" action="#">
                    {{ csrf_field() }}
                    
                    <h3>CREATE ZONE</h3><hr>
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label ">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country" value="{{ old('country') }}" id="inputCountry"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry" name="state" value="{{ old('state') }}" ></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="zoneName" class="col-sm-2 control-label">Zone Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputZoneName" placeholder="Zone Name">
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
                        <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
                    </div>
                    
                </form>
            </div>
        <!-- create zone tab ends here -->

        <!-- edit zone tab starts here -->
            <div id="edit" class="tab-pane fade">
                <h3 class="page-header">EDIT ZONE</h3>
                <form class="ezone" method=" " action="#">
                    {{ csrf_field() }}
                    <div class="form-group col-sm-12">
                        <label for="zone" class="col-sm-2 control-label">Select Zone:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <select name="zone"  class="form-control">
                            <option value="none" selected disabled><-- Please choose one --></option>
                            <option value="1">ZONE 1</option> 
                            <option value="2">ZONE 2</option>
                            <option value="3">ZONE 3</option>
                        </select>
                        </div>
                    </div>

                    <p>Now, Edit details</p>
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label ">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country" value="{{ old('country') }}" id="inputCountry"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry" name="state" value="{{ old('state') }}" ></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="zoneName" class="col-sm-2 control-label">Zone Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputZoneName" placeholder="Zone Name">
                        </div>
                    </div>
            
                    <div class="col-sm-8">
                        <h5><strong>Modify Zone?</strong></h5>
                        <button class="btn btn-create pull-right" type="submit">YES<i class="glyphicon glyphicon-send"></i></button>
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/czone">NO</a></button> 
                    </div>
                    
                </form>
            </div>
        <!-- edit zone tab ends here -->

        <!-- delete zone tab starts here -->
        <div id="delete" class="tab-pane fade">
            <h3 class="page-header">DELETE ZONE</h3>
            <div class="form-group col-sm-12">
                <!-- Load all zones -->
                <label for="zone" class="col-sm-2 control-label">Select Zone:</label>
                <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <select name="zone"  class="form-control">
                    <option value="none" selected disabled><-- Please choose one --></option>
                    <option value="1">ZONE 1</option> 
                    <option value="2">ZONE 2</option>
                    <option value="3">ZONE 3</option>
                </select>
                </div>
            </div>
        
            <div class="col-sm-8">
                <h5><strong>Delete Forever?</strong></h5>
                <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-trash"></i></button>
                <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/czone">NO</a></button> 
            </div>
        </div>
        <!-- delete branch tab ends here -->
        </div>
    </div>
@endsection