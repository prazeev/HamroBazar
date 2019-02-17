@extends('adminlte::page')

@section('title', 'Edit Categories')

@section('content_header')
    <h1>{{$category->title}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Category ({{$category->title}})</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <form action="{{route('category.update', [$category->id])}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" name="category[title]" required="required" class="form-control"
                                   placeholder="Enter title.." value="{{$category->title}}">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug*</label>
                            <input type="text" name="category[slug]" required="required" class="form-control"
                                   placeholder="Enter slug.." value="{{$category->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keywords*</label>
                            <input type="text" name="category[keywords]" required="required" class="form-control"
                                   placeholder="Enter keywords.." value="{{$category->keywords}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Enter Description*</label>
                            <textarea name="category[description]" id="description" class="form-control summernote"
                                      placeholder="Enter details for category...">{{$category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description*</label>
                            <textarea readonly="readonly" name="category[meta_description]" id="meta_description" class="form-control"
                                      placeholder="Enter meta_description for category...">{{$category->meta_description}}</textarea>
                        </div>
                        <div class="checkbox">
                            <strong>Status*</strong><br>
                            <input type="radio" name="category[status]" value="1"{{$category->status ? " checked='checked'" : null}}>Active
                            <input type="radio" name="category[status]" value="0"{{!$category->status ? " checked='checked'" : null}}>In active
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
