@extends('layouts.app')
@section('content')
    @include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
        <h3><strong>G12 WEEKLY ENTRIES</strong></h3><hr>
            <!-- "weekt" = week title, g12a = g12 attendance -->
            <p><em>Fill in the numbers as in your branch register</em></p>
            <form class="gtwelve" method="POST" action="/save/g12">
                {{ csrf_field() }}
                <div class="col-sm-12">
                    <div class="form-group col-md-4 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="control-label ">Select Country:</label>                
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                        <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry3" v-model="country" @change=getCountryBranches></select>
                        </div>
                    </div>

                    <div class="form-group col-md-4 {{ $errors->has('branch') ? ' has-error' : '' }}">
                        <label for="branch" class="control-label">Select Branch:</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name="branch"  class="form-control">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                                <option v-if="countryBranches.length==0" value="">No branch to display</option>
                        </select>
                        
                        <!--@if ($errors->has('branch'))
                        <span class="help-block">
                        <strong>{{ $errors->first('branch') }}</strong>
                        </span>
                        @endif-->
                        </div>
                    </div>  
		
                    <div class="form-group col-md-4 {{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="control-label">Select Year:</label>
                        <div class="input-group">
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
                            
                        <!--@if ($errors->has('year'))
                            <span class="help-block">
                            <strong>{{ $errors->first('year') }}</strong>
                            </span>
                        @endif-->
                        </div>
                    </div> 
                </div>

                <div class="col-sm-12">
                    <div class="form-group col-md-4">
                        <label for="weekt" class="control-label">Select Week:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="week"  class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
                                <option value="1" >Week 1</option> 
                                <option value="2" >Week 2</option>
                                <option value="3" >Week 3</option>
                                <option value="4" >Week 4</option>
                                <option value="5" >Week 5</option>
                            </select>
                            
                            <!--@if ($errors->has('week'))
                                <span class="help-block">
                                <strong>{{ $errors->first('week') }}</strong>
                                </span>
                            @endif-->
                        </div>
                    </div>

                    <div class="form-group col-md-4 {{ $errors->has('month') ? ' has-error' : '' }}">
                        <label for="month" class="control-label">Select Month:</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        <select name="month" class="form-control">
                            <option value="none" selected disabled><-- Please choose one --></option>
                            <option value="January">January</option> 
                            <option value="Febuary">February</option>
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
                        
                        <!--@if ($errors->has('month'))
                            <span class="help-block">
                            <strong>{{ $errors->first('month') }}</strong>
                            </span>
                        @endif-->
                        </div>
                    </div>
				
					<div class="form-group col-md-4">
						<label for="gtwelvea">Attendance:</label>
						<div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
						<input type="number" id="gtwelvea" name="attendance" value="{{ old('attendance') }}"class="form-control" placeholder="Number for this week">
						</div>
					</div>
                </div>

					<div class="col-sm-12">
						<button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
						<button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
                    </div>
            </form>
    </div>
@endsection