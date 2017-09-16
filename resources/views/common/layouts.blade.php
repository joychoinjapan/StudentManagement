<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/style.css')}}">
    @section('style')
    @show
    <title>Laravel学生管理系统首页@yield ('title')</title>
</head>
<body>
{{--头部--}}
@section('header')
    <header class="jumbotron">
    <div class="container-fluid">
        <h1><i class="fa fa-fw fa-commenting"></i>laravel生徒管理システム</h1>
        <p>管理者専用ページ</p>
    </div>
</header>
@show
{{--中部区域--}}
<main class="container-fluid">
    <div class="row">
        {{--左边菜单区域--}}
        <div class="col-md-2">
            @section('leftmenu')
                <div class="list-group">
                    <a href="{{url('student/index')}}" class="list-group-item
                    {{Request::getPathInfo()=='/student/index'?'active':''}}
                    ">
                        <i class="fa fa-fw fa-users"></i> 学生列表
                    </a>
                    <a href="{{url('student/create')}}" class="list-group-item
                     {{Request::getPathInfo()=='/student/create'?'active':''}}
                    ">
                        <i class="fa fa-fw fa-plus"></i> 新增学生
                    </a>
                </div>
            @show
        </div>
        {{--右边内容区域--}}
        <div class="col-md-10">

           @yield('content')
        </div>
    </div>
</main>
{{--尾部--}}
@section('footer')
    <footer class="container-fluid">
    <i class="fa fa-fw fa-copyright"></i> 2016 imooc
</footer>
    @show
</body>
</html>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/js/init.js')}}"></script>
@section('javascript')
<script>
    $(function(){

    });
    @show
</script>