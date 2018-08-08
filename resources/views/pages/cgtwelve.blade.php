@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="main">
    <form class="cgtwelve" method="POST" action="/create/g12">
        {{ csrf_field() }}
		
		<h3>CREATE A G-12 NETWORK</h3><hr>
		
		<div class="form-group col-sm-12">
            <label for="city" class="col-sm-2 control-label">Name</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" name="name" value="{{ old('name') }}"class="form-control" id="inputCity" placeholder="City">
            </div>
        </div>
		
        <div class="form-group col-sm-12">
            <label for="country" class="col-sm-2 control-label">Country</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                <input type="text" name="country" value="{{ old('country') }}" class="form-control" id="inputCountry" placeholder="Country">
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="state" class="col-sm-2 control-label">State</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                <input type="text" name="state" value="{{ old('state') }}" class="form-control" id="inputState" placeholder="State">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="city" class="col-sm-2 control-label">City</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" class="form-control" name="city" value="{{ old('city') }}" id="inputCity" placeholder="City">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="address" class="col-sm-2 control-label">Address</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="inputAddress" placeholder="ie, #15 Gerrard Street, Obanikoro">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="branch" class="col-sm-2 control-label">Select TREM Branch:</label>
            <div class="col-sm-6 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <select name="branch" class="form-control">
                <option value="none" selected disabled>-- Please choose one--</option>
                <option value="1">Headquarters</option> 
                <option value="2">Victoria Island</option>
                <option value="3">Akoka</option>
            </select>
            </div>
        </div>

        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection