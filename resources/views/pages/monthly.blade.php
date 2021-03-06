@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
        <h3 class="page-header"><strong>MONTHLY ENTRIES</strong></h3>
        <form class="monthly" method="POST" action="/save/monthly">
            {{ csrf_field() }}
            <div class="form-group col-md-3 {{ $errors->has('country') ? ' has-error' : '' }}">
                <label for="country" class="control-label ">Select Country:</label>                
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                <select class="input-medium bfh-countries form-control" required data-country="NG" name="country"  id="inputCountry3" v-model="country" @change=getCountryBranches></select>
                </div>
            </div>

            <div class="form-group col-md-3 {{ $errors->has('branch') ? ' has-error' : '' }}">
                <label for="branch" class="control-label">Select Branch:</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <select name="branch" required class="form-control">
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
            
            <div class="form-group col-md-3 {{ $errors->has('month') ? ' has-error' : '' }}">
                <label for="month" class="control-label">Select Month:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                    <select name="month" required class="form-control">
                        <option value="none" selected disabled><-- Please choose one --></option>
                        <option value="January" >January</option> 
                        <option value="Febuary" >February</option>
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
                    
                    <!--@if ($errors->has('month'))
                    <span class="help-block">
                    <strong>{{ $errors->first('month') }}</strong>
                    </span>
                    @endif-->
                </div>
            </div>
        
            <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
                <label for="year" class="control-label">Select Year:</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                <select name="year" required class="form-control">
                    <option value="0" selected disabled><-- Please choose one --></option>   
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                </select>
                
                <!--@if ($errors->has('year'))
                <span class="help-block">
                <strong>{{ $errors->first('year') }}</strong>
                </span>
                @endif-->
                </div>
            </div>
        
            <hr>
            
            <div class="form-group col-md-12">
                <strong>SECTION A</strong><hr>
                <h6>Membership: <em>(Fill in the numbers as in your branch register)</em></h6>
                <div class="col-sm-12 col-md-4">	
                    <label for="adults">Adults:</label>
                    <input type="number" id="adult" name="adults"v-model="adult" class="form-control" placeholder="Number Of Adults" required>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label for="children">Children:</label>
                    <input type="number" id="children" v-model="children" name="children" class="form-control" placeholder="Number Of Children" required>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label for="total">Total:</label>
                    <input type="number" id="total" name="total" :value="total" class="form-control" placeholder="Total" required>
                </div>
            </div>
            
            <div class="form-group col-md-12">
                <strong>SECTION B</strong><hr>
                <h6><em>Ministries In Training, (MIT)</em></h6>
                <div class="col-sm-12 col-md-6">
                    <label for="tithers">Tithers:</label>
                    <input type="number" id="tithers" name="tithers" value="{{ old('tithers') }}"  class="form-control" placeholder="Number Of Tithers" required>
                </div>
            
                <div class="col-sm-12 col-md-6">
                    <label for="newmembers">New Members Received:</label>
                    <input type="number" id="newmembers" name="newmembers" value="{{ old('newmembers') }}" class="form-control" placeholder="Number Of New Members" required>
                </div>
            </div>
            
            <div class="form-group col-md-12">
                <strong>SECTION C</strong><hr>
                <h6><em>Other Activities</em></h6>
                <div class="col-sm-12 col-md-4">
                    <label for="councilm">Council Meetings:</label>
                    <input type="number" id="councilm" name="councilm" value="{{ old('councilm') }}" class="form-control" placeholder="Number of council meetings held" required>
                </div>
            
                <div class="col-sm-12 col-md-4">
                    <label for="speciala">Special Activities:</label>
                        <input type="number" id="speciala" name="speciala" value="{{ old('speciala') }}"class="form-control" placeholder="Number of special activities" required><br>
                    <label for="specialac"><em>Comment on Activity</em></label>
                        <input type="text" id="cspeciala" name="cspeciala" value="{{ old('cspeciala') }}" class="form-control" placeholder="Comment on special activities" required>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <label for="branchp">Branch Project:</label>
                        <input type="number" id="branchp" name="branchp" value="{{ old('branchp') }}" class="form-control" placeholder="Branch project" required><br>
                    <label for="branchpc"><em>Comment on project</em></label>
                        <input type="text" id="cbranchp" name="cbranchp" value="{{ old('cbranchp') }}" class="form-control" placeholder="Comment on branch projects on hand" required>
                </div>
            </div>
            
            <div class="form-group col-md-12">
                <strong>SECTION D</strong><hr>
                <h6><em>Group Membership</em></h6>
                <div class="col-sm-12 col-md-4">
                    <label for="cmf">Christian Men Fellowship:</label>
                    <input type="number" id="cmf" name="cmf" value="{{ old('cmf') }}" class="form-control" placeholder="Number of men members" required>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <label for="cyf">Christian Youth Fellowship:</label>
                    <input type="number" id="cyf" name="cyf" value="{{ old('cyf') }}" class="form-control" placeholder="Number of youth members" required>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <label for="cwf">Christian Women Fellowship:</label>
                    <input type="number" id="cwf" name="cwf" value="{{ old('cwf') }}" class="form-control" placeholder="Number of women members" required>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <label for="rc">Royal Children Department:</label>
                    <input type="number" id="rcd" name="rcd" value="{{ old('rcd') }}" class="form-control" placeholder="Number of children" required>
                </div>
            </div>
            
            <div class="form-group col-md-12">
                <strong>SECTION E</strong><hr>
                <h6><em>G12 Reports</em></h6>
                <div class="col-sm-12 col-md-4">
                    <label for="newcells">New cells this month:</label>
                    <input type="number" id="newcells" name="newcells" value="{{ old('newcells') }}" class="form-control" placeholder="Number of new cells" required>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <label for="totalnc">Total number of cells:</label>
                    <input type="number" id="totalnc" name="totalnc" value="{{ old('totalnc') }}"  class="form-control" placeholder="Total " required>
                </div>
            </div>

            <!-- included 31/08/2018 -->
            <div class="form-group col-md-12"><hr>
                <label for="challenges" class="col-sm-4">State Any Challenges Encountered this Month</label>                
                <div class="col-md-8">
                    <textarea name="challenges"  value="{{ old('challenges') }}" class="form-control" rows="3"></textarea>
                </div>
            </div>
            
            <div class="col-sm-12">
                <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
                <button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
            </div>
        </form>
    </div>
@endsection