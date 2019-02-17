@extends('adminlte::page')

@section('title', 'View')

@section('content_header')
    <h3>{{$category->title}}<a href="{{route('category.edit',[$category->id])}}" class="btn btn-success btn-sm pull-right">Edit</a></h3>

@stop

@section('content')
    @include('flash::message')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$category->title}}</h3>
                </div>
                <div class="box-body">
                    <p>
                        {!! $category->description !!}
                    </p>
                    <table class="table table-bordered table-primary table-striped">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Title</td>
                                <td>{{$category->title}}</td>
                            </tr>
                            <tr>
                                <td>Slug</td>
                                <td>{{$category->slug}}</td>
                            </tr>
                        <tr>
                            <td>Meta Description</td>
                            <td>{{$category->meta_description}}</td>
                        </tr>
                        <tr>
                            <td>Keywords</td>
                            <td>{{$category->keywords}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{$category->status ? "Active" : 'InActive'}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
