@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
    <table class="table" id="synodr">
    <!-- SELECTED YEARS WILL HAPPEN in this h3 ON SELECTION -->
    <h3>GRAND SUMMARY OF REGULAR ATTENDANCE FROM 2016 - 2018</h3><hr>
        <div class="col-sm-12">
            <div class="form-group col-md-2 day_button">
                <label for="role" class="control-label"></label>
                <div class="input-group">
                    <button type="button" class="btn btn-back" id="add_day"><i class="glyphicon glyphicon-plus"></i>Add Day</button>
                </div>
            </div>
            
            <div class="form-group col-md-2 year_button">
                <label for="role" class="control-label"></label>
                <div class="input-group">
                    <button type="button" class="btn btn-back" id="add_year"><i class="glyphicon glyphicon-plus"></i>Add Year</button>
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <div class="form-group col-md-3" id="synod_day">
                <label for="role" class="control-label">Week Day</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                    <select name="role" class="form-control">
                        <option value="0" selected disabled><-- Please choose one --></option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div> 
            </div>

            <div class="form-group col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}" id="synod_year">
                <label for="year" class="control-label">Select Year:</label>
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
                    <button type="button" class="btn btn-back" id="generate"><span><i class="glyphicon glyphicon-send"></i></span>Generate</button>
                </div>
            </div>
        </div>

        <thead>
            <!--here, the days will load onclick generate button -->
            <tr>
                <th scope="col"></th>
                <th scope="col">Tuesdays</th>
                <th scope="col">Sundays</th>
            </tr>
        </thead>
        <tbody id="data">
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
            </tr>
        </tbody>
    </table>

    <div class="col-sm-12">
        <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
    </div>
</div>
@endsection