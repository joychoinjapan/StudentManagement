{{--成功提示框--}}
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong>成功!</strong>操作成功提示（1012）. {{Session::get('success')}}
</div>
@endif
{{--失败提示框--}}
@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong>失败!</strong> 操作失败提示（1012）.
</div>
@endif