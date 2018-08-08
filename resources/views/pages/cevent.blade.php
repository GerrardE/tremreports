@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="links">
    @include('inc.links')   
</div>
<div class="main">
    <form class="cbranch" method="POST" action="/save/event">
        
		{{ csrf_field() }}
		
		<h3>CREATE A TREM EVENT</h3><hr>
        
		<div class="form-group col-sm-12">
            <label for="eventName" class="col-sm-2 control-label">Name Of Event</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputEvent" placeholder="e.g Sunday School Service">
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="eventDescription" class="col-sm-2 control-label">Description Of Event</label>                
            <div class="col-sm-6 input-group">
                <textarea name="description"  value="{{ old('description') }}"class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group col-md-12 {{ $errors->has('month') ? ' has-error' : '' }}">
                <label for="month" class="control-label">Select Month:</label>
                <div class="col-xs-3 col-md-3 col-sm-3 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <select name="month"  class="form-control">
                    <option value="none" selected disabled>-- Please choose one--</option>
                    <option value="January" >January</option> 
                    <option value="Febuary" >Febuary</option>
                    <option value="March" >March</option>
                    <option value="April" >April</option> 
                    <option value="May" >May</option>
                    <option value="June" >June</option>
                    <option value="July" >July</option> 
                    <option value="August" >August</option>
                    <option value="September" >September</option>
                    <option value="October" >October</option> 
                    <option value="November" >November</option>
                    <option value="December" >December</option>
                </select>
                
                @if ($errors->has('month'))
                <span class="help-block">
                <strong>{{ $errors->first('month') }}</strong>
                </span>
                @endif
            </div>
        </div>
		
		<div class="form-group col-md-6 {{ $errors->has('year') ? ' has-error' : '' }}">
            <label for="year" class="control-label">Select Year:</label>
            <div class="col-sm-6 col-xs-4 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
            <select name="year"  class="form-control">
           <option value="none" selected disabled>-- Please choose one--</option>   
           <option value="2018">2018</option>
           <option value="2019">2019</option>
		   <option value="2020">2020</option>
		   <option value="2021">2021</option>
		   <option value="2022">2022</option>
		   <option value="2023">2023</option>
		   <option value="2025">2024</option>
            </select>
			
			@if ($errors->has('year'))
             <span class="help-block">
               <strong>{{ $errors->first('year') }}</strong>
             </span>
			@endif
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label for="eventBranch" class="col-sm-2 control-label">Select TREM Branch:</label>
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