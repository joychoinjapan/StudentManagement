<form class="form-horizontal" method="post" action="">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="form-group">
        <label for="姓名" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-3">
            <input type="text" name="Student[name]" value="{{old('Student')['name']}}"
                   class="form-control" id="姓名" placeholder="请输入学生姓名">
        </div>
        <div class="col-sm-3">
            <p class="form-control-static text-danger">{{$errors->first('Student.name')}}</p>
        </div>
    </div>

    <div class="form-group">
        <label for="年龄"  class="col-sm-2 control-label">年龄</label>
        <div class="col-sm-3">
            <input type="number" name="Student[age]" value="{{old('Student')['age']}}"
                   class="form-control" id="年龄" placeholder="请输入学生年龄">
        </div>
        <div class="col-sm-3">
            <p class="form-control-static text-danger">{{$errors->first('Student.age')}}</p>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>
        <div class="col-sm-3">
            @foreach($student->getSex() as $ind=>$val)
                <label>
                    <input type="radio" name="Student[sex]" value="{{$ind}}">{{$val}}
                </label>
            @endforeach

        </div>
        <div class="col-sm-3">
            <p class="form-control-static text-danger">{{$errors->first('Student.sex')}}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" class="btn btn-primary">添加</button>
        </div>
    </div>
</form>