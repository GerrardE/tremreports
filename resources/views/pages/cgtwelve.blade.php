@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="links">
    @include('inc.links')   
</div>
<div class="main" id="app">
    <h2 class="page-header">G-12 MAINTENANCE</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#create">CREATE</a></li>
        <li><a data-toggle="tab" href="#edit">EDIT</a></li>
        <li><a data-toggle="tab" href="#delete">DELETE</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade in active" id="create">
            <!-- create g12 tab starts here -->
                <form class="cgtwelve" method="POST" action="/create/g12">
                    {{ csrf_field() }}
                    <h3>CREATE A G-12 NETWORK</h3><hr>
                    <div class="form-group col-sm-12">
                        <label for="city" class="col-sm-2 control-label">Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                            <input type="text" name="name" value="{{ old('name') }}"class="form-control" id="inputCity" placeholder="eg: Zone 2">
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label ">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry3" v-model="country" @change=getCountryBranches></select>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry3" name="state" v-model="activeState" ></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="city" class="col-sm-2 control-label">City</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}" id="inputCity" placeholder="City">
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="address" class="col-sm-2 control-label">Address</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="inputAddress" placeholder="ie, #15 Gerrard Street, Obanikoro">
                        </div>
                    </div>

                   <div class="form-group col-sm-12">
                        <label for="branch" class="col-sm-2 control-label">Select Branch:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name="branch"  class="form-control"  v-model="activeBranch" >
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                            <option v-if="countryBranches.length==0" value="">No branch to display</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cgtwelve">BACK</a></button>
                        <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
                    </div>
                    
                </form>
            <!-- create g12 tab ends here -->
        </div>

        <div class="tab-pane fade" id="edit">
            <!-- edit g12 tab starts here -->
                <form class="egtwelve" method="POST" action="/edit/g12">
                    {{ csrf_field() }}
                    <h3>EDIT G-12 NETWORK</h3><hr>

                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label ">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country"  id="inputCountry" v-model="country" @change=getCountryBranches></select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-sm-12">
                        <label for="branch" class="col-sm-2 control-label">Select Branch:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name="old"  class="form-control"  v-model="activeBranch" @change="getBranchG12s">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                            <option v-if="countryBranches.length==0" value="">No branch to display</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="sgtwelve" class="col-sm-2 control-label">Select G-12:</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
                            <select name="g12"  class="form-control" v-model="activeG12" @change="getActiveG12">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="g12 in branchG12s" :value="g12.id">@{{g12.name}}</option>
                            <option v-if="branchG12s.length==0" value="">No G12 to display</option>
                            </select>
                        </div>
                    </div>

                    <p>Now, Edit:</p>
                    <div class="form-group col-sm-12">
                        <label for="name" class="col-sm-2 control-label">Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                            <input type="text" name="name" v-model="activeName" class="form-control" id="inputName" placeholder="eg: Zone 2">
                        </div>
                    </div>
                    
                    
                    <div class="form-group col-sm-12">
                        <label for="state" class="col-sm-2 control-label">State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry" name="state" v-model="activeState"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="city" class="col-sm-2 control-label">City</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                            <input type="text" class="form-control" name="city" v-model="activeCity" id="inputCity" placeholder="City">
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="address" class="col-sm-2 control-label">Address</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                            <input type="text" class="form-control" name="address" v-model="activeAddress" id="inputAddress" placeholder="ie, #15 Gerrard Street, Obanikoro">
                        </div>
                    </div>

                   <div class="form-group col-sm-12">
                        <label for="branch" class="col-sm-2 control-label">Edit Branch:</label>
                        <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name="branch"  class="form-control"  v-model="activeBranch2" @change="getBranchEvents">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="branch in countryBranches" :value="branch.id">@{{branch.name}}</option>
                            <option v-if="countryBranches.length==0" value="">No branch to display</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <h5><strong>Modify G-12 Network?</strong></h5>
                        <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-pencil"></i></button>
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cgtwelves">NO</a></button> 
                    </div>
                </form>
            <!-- edit g12 tab ends here -->    
        </div> 
        
        <div class="tab-pane fade" id="delete">
            <!-- delete g12 tab starts here -->
                <h3>DELETE G-12 NETWORK</h3><hr>
                <form class="dgtwelve">
                    <div class="form-group col-sm-12 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="country" class="col-sm-2 control-label">Country</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <select class="input-medium bfh-countries form-control" data-country="NG" name="country" id="inputCountry"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-sm-2 control-label ">Select State</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <select class="input-medium bfh-states form-control" data-country="inputCountry" name="state"></select>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="sgtwelve" class="col-sm-2 control-label">Select G-12:</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
                            <select name="gtwelve"  class="form-control">
                                <option value="none" selected disabled><-- Please choose one --></option>
                                <option>Akoka</option> 
                                <option>Jesus House</option>
                                <option>Omolara Close</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
                        <h5><strong>Delete Forever?</strong></h5>
                        <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-trash"></i></button>
                        <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cgtwelve">NO</a></button> 
                    </div>
                </form>
            <!-- delete g12 tab ends here -->
        </div>
    </div>
    
</div>
@endsection