@extends('common.layouts')
@section('content')
    {{--@include('common.add-message')--}}

    @include('common.validator')
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-fw fa-plus"></i> 新增学生</div>
        <div class="panel-body">
         @include('common._form')
        </div>
    </div>
    @stop
