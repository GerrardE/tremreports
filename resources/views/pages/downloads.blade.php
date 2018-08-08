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
            <label for="role" class="col-sm-2 control-label">Select Category</label>
            <div class="col-sm-6 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <select name="role" class="form-control">
                    <option value="none" selected disabled><-- Please choose one--></option>
                    <option>Christian Men Fellowship</option>
                    <option>Christian Women Fellowship</option>
                    <option>Young Adults Fellowship</option>
                    <option>Royal Children Fellowship</option>
                    <option>MIT</option>
                    <option>Pastors</option>
                    <option>G12 Network</option>
                    <option>Others</option>
                </select>
            </div>
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Period</th>
                <th scope="col">Month</th>
                <th scope="col">Year</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="download in allDownloads">
                <th scope="row">@{{download.id}}</th>
                <td>@{{download.name}}</td>
                <td>@{{download.year}}</th>
                <td>@{{download.description}}</td>
                <td><a :href="download.url" style="background:#000; padding:5px; border-radius:50%;"><i class="glyphicon glyphicon-download-alt"></i></a></td>
                <td><button type="button" class="btn btn-back pull-left"><a href="/edit">EDIT</a><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-create pull-right"><a href="/delete">DELETE</a><i class="glyphicon glyphicon-remove-sign"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="col-sm-12">
        <button type="button" class="btn btn-back pull-right"><i class="glyphicon glyphicon-arrow-left"></i><a href="/">BACK</a></button>
    </div>
</div>
@endsection