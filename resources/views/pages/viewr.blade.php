@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
    <table class="table">
    <h3>REPORTS SECTION</h3><hr>
        <div class="form-group col-sm-12">
            <div class="form-group col-md-4">
            <label for="role" class="control-label">Select Category</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <select name="role" class="form-control">
                    <option value="none" selected disabled><-- Please choose one --></option>
                    <option>Branch</option>
                    <option>State</option>
                    <option>Zone</option>
                    <option>Country</option>
                </select>
            </div>
            </div>

            <div class="form-group col-md-4 {{ $errors->has('month') ? ' has-error' : '' }}">
                <label for="month" class="control-label">Select Month:</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <select name="month"  class="form-control">
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
                
                @if ($errors->has('month'))
                <span class="help-block">
                <strong>{{ $errors->first('month') }}</strong>
                </span>
                @endif
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
                    
                @if ($errors->has('year'))
                    <span class="help-block">
                    <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
                </div>
            </div>
        </div>

        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Week 1</th>
                <th scope="col">Week 2</th>
                <th scope="col">Week 3</th>
                <th scope="col">Week 4</th>
                <th scope="col">MONTHLY TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><h3>CONVERTS AND 1ST-TIMERS</h3></th>
            </tr>
            <tr>
                <td>Converts</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>First-Timers</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <th scope="row"><h3>MEMBERS AND MIT</h3><br>Section A</th>
            </tr>
            <tr>
                <td>Adults</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Children</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <td scope="row"><b>Section B</b><br>CHURCH ATTENDANCE</td>
            </tr>
            <tr>
                <td>Men</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Women</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Children</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <td scope="row"><b>Section C</b></td>
            </tr>
            <tr>
                <td>NEW CONVERTS CLASS</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <td scope="row"><b>Section D</b></td>
            </tr>
            <tr>
                <td>MIT</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <td scope="row"><b>Section E</b></td>
            </tr>
            <tr>
                <td>NEW MEMBERS</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <td scope="row"><b>Section F</b></td>
            </tr>
            <tr>
                <td>CMF (Christian Men)</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>CWF (Christian Women)</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>YAF (Young Adults)</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>RCF (Royal Children)</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr>
                <td scope="row"><b>Section G</b></td>
            </tr>
            <tr>
                <td>TITHERS</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>

            <tr></tr>
            <tr>
                <th scope="row"><h3>G12</h3></th>
            </tr>
            <tr>
                <td>NEW CELLS</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td>CELLS</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>100</td>
                <td>400</td>
            </tr>
            <tr>
                <td scope="row"><h4>GRAND TOTAL</h4></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>4,000</td>
            </tr>
    </tbody>
    </table>

    <div class="col-sm-12">
        <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
    </div>
</div>
@endsection