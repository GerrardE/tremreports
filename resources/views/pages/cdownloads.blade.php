@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
        <h3>UPLOAD SECTION</h3>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#create">CREATE</a></li>
            <li><a data-toggle="tab" href="#edit">EDIT UPLOAD</a></li>
            <li><a data-toggle="tab" href="#udelete">DELETE UPLOAD</a></li>
            <li><a data-toggle="tab" href="#uploadc">CREATE CATEGORY</a></li>
            <li><a data-toggle="tab" href="#ucdelete">DELETE UPLOAD CATEGORY</a></li>
        </ul>

        <div class="tab-content">
            <!-- create upload tab starts here -->
            <div id="create" class="tab-pane fade in active">
                <h3>CREATE UPLOAD</h3>
                <form class="cbranch" method="POST" action="/create/download">
                {{ csrf_field() }}
                    <div class="form-group col-sm-12">
                        <label for="category" class="col-sm-2 control-label">Select Category</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="category" class="form-control">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="category in allCategories" :value="category.id">@{{category.name}}</option>
                            <option v-if="allCategories.length==0" value="">No category to display</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-12">
                        <label for="downloadName" class="col-sm-2 control-label">Download Name</label>                
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
                            
                            <!--@if ($errors->has('month'))
                                <span class="help-block">
                                <strong>{{ $errors->first('month') }}</strong>
                                </span>
                            @endif-->
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
                        
                        <!--@if ($errors->has('year'))
                         <span class="help-block">
                           <strong>{{ $errors->first('year') }}</strong>
                         </span>
                        @endif-->
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

            <!-- edit upload tab starts here -->
            <div id="edit" class="tab-pane fade">
                <h3>EDIT UPLOAD</h3>
                <p>Select the upload you want to edit;</p>
                <!--on select, load all the available downloads: set them for selection below -->
                
                
                    <form class="cbranch" method="POST" action="/edit/download">
                        {{ csrf_field() }}


                   <div class="form-group col-sm-12">
                        <label for="category" class="col-sm-2 control-label">Select Category</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="old-category" class="form-control" v-model="activeCategory" @change="getCategoryUploads">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="category in allCategories" :value="category.id">@{{category.name}}</option>
                            <option v-if="allCategories.length==0" value="">No category to display</option>
                            </select>
                        </div>
                    </div>

                <div class="form-group col-sm-12">
                    <label for="role" class="col-sm-2 control-label">Select Upload</label>
                    <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        <select name="upload" class="form-control" v-model="activeUpload" @change="getUploadDetails">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="upload in categoryUploads" :value="upload.id">@{{upload.name}}</option>
                            <option v-if="categoryUploads.length==0" value="">No upload to display</option>
                        </select>
                    </div><hr>
                

                    <!-- on select upload, load form containing values to be edited -->
                    <p>Modify the upload here;</p>

                        <div class="form-group col-sm-12">
                            <label for="role" class="col-sm-2 control-label">Select Category</label>
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <select name="category" class="form-control" v-model="uploadCategory">
                                <option value="0" selected disabled><-- Please choose one --></option>
                                <option v-for="category in allCategories" :value="category.id">@{{category.name}}</option>
                                <option v-if="allCategories.length==0" value="">No category to display</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label for="downloadName" class="col-sm-2 control-label">Edit Download Name</label>                
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                                <input type="text" class="form-control" name="name" value=" " id="inputDescription" v-model="activeName" placeholder="e.g Revised Manual">
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="month" class="col-sm-2 control-label">Select Month</label>
                            <div class="col-sm-6 col-xs-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <select name="month"  class="form-control" v-model="activeMonth">
                                    <option value="none" selected disabled><-- Please choose one --></option>
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
                                
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12 ">
                            <label for="year" class="col-sm-2 control-label">Select Year</label>
                            <div class="col-sm-6 col-xs-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                            
                            <select name="year"  class="form-control" v-model="activeYear">
                                <option value="0" selected disabled><-- Please choose one --></option>   
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2025">2024</option>
                            </select>
                            
                       
                            </div>
                        </div>
                
                
                        <div class="form-group col-sm-12">
                            <label for="downloadDescription" class="col-sm-2 control-label">Edit Description</label>                
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" name="description" v-model="activeDescription" class="form-control" id="inputDescription" placeholder="e.g Speak words of wisdom today...">
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label for="downloadDescription" class="col-sm-2 control-label">Edit URL</label>                
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-open-file"></i></span>
                                <input type="text" class="form-control" name="url" value="{{ old('url') }}" id="inputDescription" placeholder="e.g https://www.trem.org/download/example.jpg" v-model="url">
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <label for="downloadDescription" class="col-sm-2 control-label">Select New Upload:</label>                
                            <div class="col-sm-6 input-group">
                                <input type="file" id="productimage"  style="display:none;"  v-on:change="fileChange" >
                                <span @click="showFilePicker" class="image-picker" title="Choose file"><img  id="" src="/storage/icons/share-arrow.png" width="15px" height="15px"  alt="" /><span class="photo_icon_text"><b> Select</b></span></span>
                            </div>
                        </div>
                        
                        <div class="col-sm-8">
                            <button class="btn btn-create pull-right" type="submit">MODIFY<i class="glyphicon glyphicon-send"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- edit upload tab ends here -->

            <!-- create upload category tab starts here -->
            <div id="uploadc" class="tab-pane fade">
                <h3>CREATE UPLOAD CATEGORY</h3>
                <p>Set up the upload category here;</p>
                <form class="cbranch" method="POST" action="/create/category">
                  
                {{ csrf_field() }}
                   <!-- this form controls the uploads category dropdown -->
                        
                    <div class="form-group col-sm-12">
                        <label for="categoryName" class="col-sm-2 control-label">Upload Category Name</label>                
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-alphabet"></i></span>
                            <input type="text" class="form-control" name="name" value="" id="inputDescription" placeholder="e.g G12">
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
                        <button class="btn btn-create pull-right" type="submit">CREATE<i class="glyphicon glyphicon-send"></i></button>
                    </div>
                </form>
            </div>
            <!-- create upload category tab ends here -->

            <!--delete upload tab starts here -->
            <div id="udelete" class="tab-pane fade">
                <h3>DELETE UPLOAD</h3>
                <p>Select upload you want to delete</p>
                <form class="cbranch" method="POST" action="/delete/download">
                  
                {{ csrf_field() }}

                <div class="form-group col-sm-12">
                        <label for="category" class="col-sm-2 control-label">Select Category</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="old-category" class="form-control" v-model="activeCategory" @change="getCategoryUploads">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="category in allCategories" :value="category.id">@{{category.name}}</option>
                            <option v-if="allCategories.length==0" value="">No category to display</option>
                            </select>
                        </div>
                    </div>

                <div class="form-group col-sm-12">
                    <label for="role" class="col-sm-2 control-label">Upload Name</label>
                    <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                        <select name="upload" class="form-control" v-model="activeUpload" @change="getUploadDetails">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="upload in categoryUploads" :value="upload.id">@{{upload.name}}</option>
                            <option v-if="categoryUploads.length==0" value="">No upload to display</option>
                        </select>
                    </div>
                </div>
                
                <!-- div appears on select upload-->
                <div class="col-sm-8">
                    <h5><strong>Delete Forever?</strong></h5>
                    <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-send"></i></button>
                    <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cdownload">NO</a></button> 
                </div>

                </form>
            </div>
            <!--delete upload tab ends here -->

            <!-- delete upload category tab starts here -->
            <div id="ucdelete" class="tab-pane fade">
                <h3>DELETE UPLOAD CATEGORY</h3>
                <p>Select upload category you want to delete</p>
                <form class="cbranch" method="POST" action="/delete/category">
                  
                {{ csrf_field() }}

                <div class="form-group col-sm-12">
                        <label for="category" class="col-sm-2 control-label">Select Category</label>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <select name="category" class="form-control" v-model="activeCategory" @change="getCategoryUploads">
                            <option value="0" selected disabled><-- Please choose one --></option>
                            <option v-for="category in allCategories" :value="category.id">@{{category.name}}</option>
                            <option v-if="allCategories.length==0" value="">No category to display</option>
                            </select>
                        </div>
                    </div>
                
                <!-- div appears on select upload-->
                <div class="col-sm-8">
                    <h5><strong>Delete Forever?</strong></h5>
                    <button class="btn btn-create pull-right" type=" ">YES<i class="glyphicon glyphicon-send"></i></button>
                    <button type="button" class="btn btn-back pull-left"><i class="glyphicon glyphicon-arrow-left"></i><a href="/cdownload">NO</a></button> 
                </div>

                </form>
            </div>
            <!-- delete upload category tab ends here -->
        </div>
    </div>
    
@endsection