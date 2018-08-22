@extends('layouts.app')
@section('content')
@include('inc.navbar')
    <div class="links">
        @include('inc.links')   
    </div>
    <div class="main" id="app">
    <table class="table table-striped">
    <h3>DOWNLOADS SECTION</h3><hr>
        
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
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Period</th>
                <th scope="col">Month</th>
                <th scope="col">Year</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="download in allDownloads">
                <th scope="row">@{{download.id}}</th>
                <td>@{{download.name}}</td>
                <td>@{{download.month}}</td>
                <td>@{{download.year}}</td>
                <td>@{{download.description}}</td>
                <td><button class="btn btn-create"><a :href="download.url">DOWNLOAD</a><i class="glyphicon glyphicon-download"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="col-sm-12">
        <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
    </div>
</div>
@endsection