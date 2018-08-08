@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
    <form class="cbranch" method="POST" action="/create/download">
	{{ csrf_field() }}
        <h3>UPLOAD FILES</h3><hr>
        <div class="form-group col-sm-12">
            <label for="role" class="col-sm-2 control-label">Select Category</label>
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <select name="role" class="form-control">
                    <option value="none" selected disabled><-- Please choose one--></option>
                    <option>Christian Men Fellowship</option>
                    <option>Christian Women Fellowship</option>
                    <option>Young Adults Fellowship</option>
                    <option>Royal Children Fellowship</option>
                    <option>MIT</option>
                    <option>Pastors</option>
                    <option>G12 Network</option>
                    <option>Others</option>
                </select>
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label for="downloadName" class="col-sm-2 control-label">Description</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="inputDescription" placeholder="e.g Revised Manual">
            </div>
        </div>
		
		<div class="form-group col-md-12 {{ $errors->has('month') ? ' has-error' : '' }}">
            <label for="month" class="col-sm-2 control-label">Select Month</label>
            <div class="col-sm-6 col-xs-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <select name="month"  class="form-control">
                    <option value="none" selected disabled>-- Please choose one--</option>
                    <option value="January">January</option> 
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option> 
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option> 
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option> 
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                
                @if ($errors->has('month'))
                    <span class="help-block">
                    <strong>{{ $errors->first('month') }}</strong>
                    </span>
                @endif
            </div>
        </div>
		
		<div class="form-group col-md-12 {{ $errors->has('year') ? ' has-error' : '' }}">
            <label for="year" class="col-sm-2 control-label">Select Year</label>
            <div class="col-sm-6 col-xs-6 input-group">
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
            <label for="downloadDescription" class="col-sm-2 control-label">Brief Description</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <input type="text" name="description" value="{{ old('description') }}" class="form-control" id="inputDescription" placeholder="e.g Speak words of wisdom today...">
            </div>
        </div>
		
		<div class="form-group col-sm-12">
            <label for="downloadDescription" class="col-sm-2 control-label">URL</label>                
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-open-file"></i></span>
                <input type="text" class="form-control" name="url" value="{{ old('url') }}" id="inputDescription" placeholder="e.g https://www.trem.org/download/example.jpg" v-model="url">
            </div>
        </div>
		
		<div class="form-group col-sm-12">
            <label for="downloadDescription" class="col-sm-2 control-label">Select Upload:</label>                
            <div class="col-sm-6 input-group">
		        <input type="file" id="productimage"  style="display:none;"  v-on:change="fileChange" >
			    <span @click="showFilePicker" class="image-picker" title="Choose file"><img  id="" src="/storage/icons/share-arrow.png" width="15px" height="15px"  alt="" /><span class="photo_icon_text"><b> Select</b></span></span>
		    </div>
        </div>
		
        <div class="col-sm-8">
            <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
            <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
        </div>
        
    </form>
</div>
@endsection