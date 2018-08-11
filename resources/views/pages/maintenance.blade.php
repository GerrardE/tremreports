@extends('layouts.app')
@section('content')
    @include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main">
    <center><h3 class="page-header">MAINTENANCE SECTION</h3></center>
    <div class="form-group col-sm-12">
        <label for="role" class="col-sm-2 control-label">Select Category</label>
        <div class="col-sm-6 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
            <select name="role" class="form-control">
                <option value="none" selected disabled><-- Please choose one --></option>
                <option>Branch</option>
                <option>G12</option>
                <option>User</option>
                <option>Events</option>
                <option>Uploads</option>
            </select>
        </div>
    </div>
    </div>
@endsection