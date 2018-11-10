@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
        <h3>GRAND SUMMARY OF REGULAR ATTENDANCE</h3><hr>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#year">YEAR</a></li>
            <li><a data-toggle="tab" href="#quarter">QUARTER</a></li>
            <li><a data-toggle="tab" href="#month">MONTH</a></li>
            <li><a data-toggle="tab" href="#week">WEEK</a></li>
        </ul>
    
        <div class="tab-content">
        <!-- year tab starts here -->
            <div id="year" class="tab-pane fade in active"><br>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="control-label">From:</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                        <select name="year"  class="form-control" v-model="from">
                            <option value="0" selected disabled><-- Please choose one --></option>   
                            <option value="2018">2019</option>
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

                    <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="control-label">To:</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                        <select name="year"  class="form-control" v-model="to">
                            <option value="0" selected disabled><-- Please choose one --></option>   
                            <option value="2018">2019</option>
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
                </div>

                <div class="col-sm-12">
                    <div class="form-group col-sm-2">
                        <label for="role" class="control-label"></label>
                        <div class="input-group">
                            <button type="button" class="btn btn-back" id="generate-y"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                
                <!-- To start the algorithms I had to move the form into a seperate vue component-->
                
                <!-- Result for each year will be displayed in each of the components so I will use a v-for loop to display datas for each year-->
                <!-- The name of the component is yearly, goto resources/assets/js/components/yearly.vue for the codebase -->
                <yearly v-for="year in yearly" :year="year"></yearly>
                </div>

                <div class="col-sm-12">
                    <button type="button" class="btn btn-y btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/synodr">CLEAR</a></button>
                </div>
            </div>
        <!-- year tab ends here -->
        <!-- quarter tab starts here -->
            <div id="quarter" class="tab-pane fade"><br>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-3">
                        <label for="quarter" class="control-label">From:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="quarter"  class="form-control">
                                <option value="none" selected disabled><-- Please choose one--></option>   
                                <option value="3">1st Quarter</option>
                                    <option value="6">2nd Quarter</option>
                                    <option value="9">3rd Quarter</option>
                                    <option value="12">4th Quarter</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
                                <label for="year" class="control-label">Of The Year:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                                    <select name="year"  class="form-control">
                                        <option value="0" selected disabled><-- Please choose one --></option>   
                                        <option value="2018">2019</option>
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
                    </div>
                    
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <label for="quarter" class="control-label">To:</label>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="quarter"  class="form-control">
                                    <option value="none" selected disabled><-- Please choose one--></option>   
                                    <option value="3">1st Quarter</option>
                                    <option value="6">2nd Quarter</option>
                                    <option value="9">3rd Quarter</option>
                                    <option value="12">4th Quarter</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
                                <label for="year" class="control-label">Of The Year:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                                    <select name="year"  class="form-control">
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
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group col-sm-2">
                        <label for="role" class="control-label"></label>
                        <div class="input-group">
                            <button type="button" class="btn btn-back" id="generate-q"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                            </div>
                        </div>
                </div>

                <div class="container-fluid"> 
                <!-- To start the algorithms I had to move the form into a seperate vue component-->
                
                <!-- Result for each year will be displayed in each of the components so I will use a v-for loop to display datas for each year-->
                <!-- The name of the component is yearly, goto resources/assets/js/components/yearly.vue for the codebase -->
                <yearly></yearly> 

                </div>
    
                <div class="col-sm-12">
                    <button type="button" class="btn btn-q btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/synodr">CLEAR</a></button>
                </div>
            </div>
        <!-- quarter tab ends here -->
        <!-- month tab starts here -->
            <div id="month" class="tab-pane fade"><br>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-3 {{ $errors->has('month') ? ' has-error' : '' }}">
                        <label for="month" class="control-label">From:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="month" required class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
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
                        <label for="year" class="control-label">Of The Year:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                            <select name="year" class="form-control">
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
                </div>

                <div class="form-group col-md-12">
                    <div class="form-group col-md-3 {{ $errors->has('month') ? ' has-error' : '' }}">
                        <label for="month" class="control-label">To:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="month" required class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
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
                        <label for="year" class="control-label">Of The Year:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                            <select name="year" class="form-control">
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
                </div>
                    
                <div class="col-sm-12">
                    <div class="form-group col-sm-2">
                        <label for="role" class="control-label"></label>
                        <div class="input-group">
                            <button type="button" class="btn btn-back" id="generate-m"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                        </div>
                    </div>
                </div>

                <div class="container-fluid"> 
                <!-- To start the algorithms I had to move the form into a seperate vue component-->
                
                <!-- Result for each year will be displayed in each of the components so I will use a v-for loop to display datas for each year-->
                <!-- The name of the component is yearly, goto resources/assets/js/components/yearly.vue for the codebase -->
                <yearly></yearly>
                </div>

                <div class="col-sm-12">
                    <button type="button" class="btn btn-m btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/synodr">CLEAR</a></button>
                </div>
            </div>
        <!-- month tab ends here -->
        <!-- week tab starts here -->
            <div id="week" class="tab-pane fade"><br>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-3">
                        <label for="month" class="control-label">From:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="month" required class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
                                <option value="1" >Week 1</option> 
                                <option value="2" >Week 2</option>
                                <option value="3" >Week 3</option> 
                                <option value="4" >Week 4</option> 
                                <option value="5" >Week 5</option>  
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-3 {{ $errors->has('month') ? ' has-error' : '' }}">
                        <label for="month" class="control-label">Of:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="month" required class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
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
                        <label for="year" class="control-label">The Year:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                            <select name="year" class="form-control">
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
                </div>

                <div class="form-group col-md-12">
                    <div class="form-group col-md-3">
                        <label for="week" class="control-label">To:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="month" required class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
                                <option value="1" >Week 1</option> 
                                <option value="2" >Week 2</option>
                                <option value="3" >Week 3</option> 
                                <option value="4" >Week 4</option> 
                                <option value="5" >Week 5</option>  
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-3 {{ $errors->has('month') ? ' has-error' : '' }}">
                        <label for="month" class="control-label">Of:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="month" required class="form-control">
                                <option value="0" selected disabled><-- Please choose one --></option>
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
                        <label for="year" class="control-label">The Year:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                            <select name="year" class="form-control">
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
                </div>


                        
                <div class="col-sm-12">
                    <div class="form-group col-sm-2">
                        <label for="role" class="control-label"></label>
                        <div class="input-group">
                            <button type="button" class="btn btn-back" id="generate-w"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                        </div>
                    </div>
                </div>
    
                <div class="container-fluid"> 
                
                <!-- To start the algorithms I had to move the form into a seperate vue component-->
                
                <!-- Result for each year will be displayed in each of the components so I will use a v-for loop to display datas for each year-->
                <!-- The name of the component is yearly, goto resources/assets/js/components/yearly.vue for the codebase -->
                <yearly></yearly>

                </div>
    
                <div class="col-sm-12">
                    <button type="button" class="btn btn-w btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/synodr">CLEAR</a></button>
                </div>
             </div>
        <!-- week tab ends here -->
        </div>
    </div>
@endsection