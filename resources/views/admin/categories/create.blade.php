@extends('adminlte::page')

@section('title', 'Create Categories')

@section('content_header')
    <h1>Create Categories</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Categories</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" name="category[title]" required="required" class="form-control"
                                   placeholder="Enter title..">
                        </div>
                        <div class="form-group">
                            <label for="description">Enter Description*</label>
                            <textarea name="category[description]" id="description" class="form-control"
                                      placeholder="Enter details for category..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
