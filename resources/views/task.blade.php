@extends('layout.add');
@section('content')
    <div class="panel-body">
        @include('error.503')
        <form action="{{url('task')}}" method="post" class="form-control" >
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" class="" id="task_name" name="task_name"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection