@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <h1>{{$product->title}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Category ({{product->title}})</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">

                </div>
            </div>
        </div>
    </div>
@stop
