@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="">
    <h3><strong>WEEKLY REPORTS</strong></h3><hr>
        <form class="weekly" method="POST" action="/save/weekly">	
        {{ csrf_field() }}		
		<!-- "wmen" = week's men, wchildren = week's children, etc - just to differenciate from same name in monthly reports -->
                <p><strong>Weekly Attendance;<em>(Fill in the numbers as in your branch register)</em></strong></p>
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('month') ? ' has-error' : '' }}">
                    <label for="month" class="control-label">Select Month:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                    <select name="month"  class="form-control">
                        <option value="none" selected disabled><-- Please choose one --></option>
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
            
            <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('year') ? ' has-error' : '' }}">
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
                
                @if ($errors->has('year'))
                    <span class="help-block">
                    <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
                </div>
            </div>
            
                <div class="col-xs-12 col-sm-6 col-md-3 {{ $errors->has('branch') ? ' has-error' : '' }}">
                    <label for="branch" class="control-label">Select TREM Branch:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <select name="branch"  class="form-control">
                        <option value="none" selected disabled>-- Please choose one--</option>
                        <option value="1" >Headquarters</option> 
                        <option value="2" >Victoria Island</option>
                        <option value="3" >Akoka</option>
                    </select>
                    
                    @if ($errors->has('branch'))
                    <span class="help-block">
                    <strong>{{ $errors->first('branch') }}</strong>
                    </span>
                    @endif
                    </div>
                </div>
            </div>

                <div class="form-group col-md-6">
                    <label for="wevent" class="control-label">Event:</label>
                    <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>	
                        <select name="event" class="form-control">
                            <option value="none" selected disabled>-- Please choose one--</option>
                            <option value="klwc">KLWC</option>
                            <option value="woc">WOC</option>
                            <option value="metathesis">METATHESIS</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="wmen">Men:</label>
                    <div class="col-sm-6 input-group">	
                        <input type="number" id="wmen" name="men" value="{{ old('men') }}" class="form-control" placeholder="Number Of Men">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="wwomen">Women:</label>
                    <div class="col-sm-6 input-group">	
                        <input type="number" id="women" name="women" value="{{ old('women') }}" class="form-control" placeholder="Number Of Women">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="wchildren">Children:</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" id="children" name="children" value="{{ old('children') }}" class="form-control" placeholder="Number Of Children">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="wtotal">Total:</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" id="wtotal" name="total" value="{{ old('total') }}" class="form-control" placeholder="Total">
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="wpreacher">Preacher:</label>    
                    <div class="col-sm-6 input-group">
                        <input type="text" id="preacher" name="preacher" value="{{ old('preacher') }}" class="form-control" placeholder="e.g: Bishop Mike Okonkwo">
                    </div>
                </div>
            

            <div class="col-md-8 col-sm-6 col-xs-3">
                <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
                <button class="btn btn-submit pull-right" type="submit">SUBMIT<i class="glyphicon glyphicon-send"></i></button>
            </div>
        </form>
        </div>
@endsection