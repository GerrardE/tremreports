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
                        <select name="year"  class="form-control">
                            <option value="none" selected disabled><-- Please choose one--></option>   
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

                    <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="control-label">To:</label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                        <select name="year"  class="form-control">
                            <option value="none" selected disabled><-- Please choose one--></option>   
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
                    <div class="form-group col-sm-2">
                        <label for="role" class="control-label"></label>
                        <div class="input-group">
                            <button type="button" class="btn btn-back" id="generate-y"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="col-sm-3">
                        <table class="table table-y table-striped table-hover table-bordered table-condensed">
                            <thead>
                                <!--here, each year will load onclick generate button -->
                                <tr>
                                    <th scope="col"><strong>2015</strong></th>
                                    <th scope="col">Tuesdays</th>
                                    <th scope="col">Sundays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HQ</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>

                                <tr>
                                    <td>HQ ANNEX</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                
                                <tr>
                                    <td>EJIGBO</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>LGS ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>   
                                
                                <tr>
                                    <td>ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 4</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 5</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 6</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 7</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 8</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 9</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 10</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 11</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 12</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 13</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 14</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td> SOUTH-SOUTH 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-SOUTH 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>NORTH. ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                </tr>
                                
                                <tr>
                                    <td>EUROPE AND ASIA</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>TREM AMERICA ZONE</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>AFRICA ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>AFRICA ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                    <td>1000</td>
                                    <td>1000</td>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-y table-striped table-hover table-bordered table-condensed">
                            <thead>
                                <!--here, each year will load onclick generate button -->
                                <tr>
                                    <th scope="col"><strong>2016</strong></th>
                                    <th scope="col">Tuesdays</th>
                                    <th scope="col">Sundays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HQ</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>

                                <tr>
                                    <td>HQ ANNEX</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                
                                <tr>
                                    <td>EJIGBO</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>LGS ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>   
                                
                                <tr>
                                    <td>ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 4</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 5</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 6</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 7</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 8</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 9</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 10</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 11</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 12</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 13</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 14</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td> SOUTH-SOUTH 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-SOUTH 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>NORTH. ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                </tr>
                                
                                <tr>
                                    <td>EUROPE AND ASIA</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>TREM AMERICA ZONE</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>AFRICA ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>AFRICA ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                    <td>1000</td>
                                    <td>1000</td>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-y table-striped table-hover table-bordered table-condensed">
                            <thead>
                                <!--here, each year will load onclick generate button -->
                                <tr>
                                    <th scope="col"><strong>2017</strong></th>
                                    <th scope="col">Tuesdays</th>
                                    <th scope="col">Sundays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HQ</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>

                                <tr>
                                    <td>HQ ANNEX</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                
                                <tr>
                                    <td>EJIGBO</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>LGS ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>   
                                
                                <tr>
                                    <td>ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 4</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 5</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 6</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 7</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 8</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 9</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 10</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 11</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 12</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 13</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 14</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td> SOUTH-SOUTH 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-SOUTH 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>NORTH. ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                </tr>
                                
                                <tr>
                                    <td>EUROPE AND ASIA</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>TREM AMERICA ZONE</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>AFRICA ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>AFRICA ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                    <td>1000</td>
                                    <td>1000</td>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-y table-striped table-hover table-bordered table-condensed">
                            <thead>
                                <!--here, each year will load onclick generate button -->
                                <tr>
                                    <th scope="col"><strong>2018</strong></th>
                                    <th scope="col">Tuesdays</th>
                                    <th scope="col">Sundays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HQ</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>

                                <tr>
                                    <td>HQ ANNEX</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                
                                <tr>
                                    <td>EJIGBO</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>LGS ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>   
                                
                                <tr>
                                    <td>ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 4</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 5</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 6</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 7</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 8</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 9</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 10</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 11</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 12</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 13</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>ZONE 14</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr> 
                                
                                <tr>
                                    <td>SOUTH WEST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td> SOUTH-SOUTH 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-SOUTH 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>SOUTH-EAST 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>NORTH. ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>NORTH. ZONE 3</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                </tr>
                                
                                <tr>
                                    <td>EUROPE AND ASIA</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>TREM AMERICA ZONE</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>AFRICA ZONE 1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <td>AFRICA ZONE 2</td>
                                    <td>100</td>
                                    <td>100</td>
                                    
                                </tr>

                                <tr>
                                    <th scope="row"><h4>TOTAL</h4></th>
                                    <td>1000</td>
                                    <td>1000</td>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-12">
                    <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/synodr">CLEAR</a></button>
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
                                    <option value="none" selected disabled><-- Please choose one--></option>   
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
                                    <option value="none" selected disabled><-- Please choose one--></option>   
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
                        <div class="form-group col-sm-2">
                            <label for="role" class="control-label"></label>
                            <div class="input-group">
                                <button type="button" class="btn btn-back" id="generate-q"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                                </div>
                            </div>
                    </div>

                    <div class="container-fluid"> 
                        <div class="col-sm-3">
                            <table class="table table-q table-striped table-hover table-bordered table-condensed">
                                <thead>
                                    <!--here, the days will load onclick generate button -->
                                    <tr>
                                        <th scope="col">2015</th>
                                        <th scope="col">Tuesdays</th>
                                        <th scope="col">Sundays</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HQ</td>
                                        <td>100</td>
                                        <td>100</td>
                                    </tr>

                                    <tr>
                                        <td>HQ ANNEX</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>EJIGBO</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>LGS ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>   
                                    
                                    <tr>
                                        <td>ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 4</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 5</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 6</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 7</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 8</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 9</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 10</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 11</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 12</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 13</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 14</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td> SOUTH-SOUTH 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-SOUTH 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>NORTH. ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>EUROPE AND ASIA</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>TREM AMERICA ZONE</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>AFRICA ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>AFRICA ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                        <td>1000</td>
                                        <td>1000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-3">
                            <table class="table table-q table-striped table-condensed table-hover table-bordered">
                                <thead>
                                    <!--here, the days will load onclick generate button -->
                                    <tr>
                                        <th scope="col">2016</th>
                                        <th scope="col">Tuesdays</th>
                                        <th scope="col">Sundays</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HQ</td>
                                        <td>100</td>
                                        <td>100</td>
                                    </tr>

                                    <tr>
                                        <td>HQ ANNEX</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>EJIGBO</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>LGS ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>   
                                    
                                    <tr>
                                        <td>ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 4</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 5</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 6</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 7</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 8</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 9</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 10</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 11</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 12</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 13</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 14</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td> SOUTH-SOUTH 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-SOUTH 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>NORTH. ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>EUROPE AND ASIA</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>TREM AMERICA ZONE</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>AFRICA ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>AFRICA ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                        <td>1000</td>
                                        <td>1000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-3">
                            <table class="table table-q table-striped table-condensed table-hover table-bordered">
                                <thead>
                                    <!--here, the days will load onclick generate button -->
                                    <tr>
                                        <th scope="col">2017</th>
                                        <th scope="col">Tuesdays</th>
                                        <th scope="col">Sundays</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HQ</td>
                                        <td>100</td>
                                        <td>100</td>
                                    </tr>

                                    <tr>
                                        <td>HQ ANNEX</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>EJIGBO</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>LGS ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>   
                                    
                                    <tr>
                                        <td>ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 4</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 5</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 6</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 7</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 8</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 9</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 10</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 11</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 12</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 13</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 14</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td> SOUTH-SOUTH 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-SOUTH 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>NORTH. ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>EUROPE AND ASIA</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>TREM AMERICA ZONE</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>AFRICA ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>AFRICA ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                        <td>1000</td>
                                        <td>1000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-3">
                            <table class="table table-q table-striped table-condensed table-hover table-bordered">
                                <thead>
                                    <!--here, the days will load onclick generate button -->
                                    <tr>
                                        <th scope="col">2018</th>
                                        <th scope="col">Tuesdays</th>
                                        <th scope="col">Sundays</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HQ</td>
                                        <td>100</td>
                                        <td>100</td>
                                    </tr>

                                    <tr>
                                        <td>HQ ANNEX</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>EJIGBO</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>LGS ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>   
                                    
                                    <tr>
                                        <td>ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 4</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 5</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 6</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 7</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 8</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 9</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 10</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 11</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 12</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 13</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>ZONE 14</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr> 
                                    
                                    <tr>
                                        <td>SOUTH WEST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td> SOUTH-SOUTH 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-SOUTH 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>SOUTH-EAST 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>NORTH. ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                
                                    <tr>
                                        <td>NORTH. ZONE 3</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>EUROPE AND ASIA</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>TREM AMERICA ZONE</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>AFRICA ZONE 1</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>AFRICA ZONE 2</td>
                                        <td>100</td>
                                        <td>100</td>
                                        
                                    </tr>

                                    <tr>
                                        <th scope="row"><h4>TOTAL</h4></th>
                                        <td>1000</td>
                                        <td>1000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-12">
                    <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/synodr">CLEAR</a></button>
                </div>
            </div>
        <!-- quarter tab ends here -->
        <!-- month tab starts here -->
            <div id="month" class="tab-pane fade"><br>
            </div>
        <!-- month tab ends here -->
        <!-- week tab starts here -->
            <div id="week" class="tab-pane fade"><br>
            </div>
        <!-- week tab ends here -->
        </div>
    </div>
@endsection