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
            <label for="role" class="col-sm-2 control-label">Select Category</label>
            <div class="col-sm-6 input-group">
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