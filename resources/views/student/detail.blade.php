@extends('common.layouts')
@section('content')

        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-fw fa-archive"></i> 学生详情</div>
            <table class="table table-responsive table-bordered table-hover">
                <tr>
                    <td>ID</td>
                    <td>{{$student->id}}</td>
                </tr>
                <tr>
                    <td>名字</td>
                    <td>{{$student->name}}</td>
                </tr>
                <tr>
                    <td>性别</td>
                    <td>{{$student->getSex($student->sex)}}</td>
                </tr>
                <tr>
                    <td>年龄</td>
                    <td>{{$student->age}}</td>
                </tr>
                <tr>
                    <td>添加日期</td>
                    <td>{{date('Y-m-d',$student->created_at)}}</td>
                </tr>
                <tr>
                    <td>最后修改</td>
                    <td>{{date('Y-m-d',$student->updated_at)}}</td>
                </tr>
            </table>
        </div>
    @stop