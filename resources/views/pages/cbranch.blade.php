@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
<div class="main">
    <form class="cbranch" method="POST" action="/save/branch">
		{{ csrf_field() }}
		
		<h3>CREATE A TREM BRANCH</h3><hr>
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

        <div class="form-group col-sm-12 {{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-sm-2 control-label" >City</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="city" value="{{ old('city') }}" class="form-control" id="inputCity" placeholder="City">
            </div>
        </div>

        <div class="form-group col-sm-12 {{ $errors->has('address') ? ' has-error' : '' }}"" ">
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
@endsection