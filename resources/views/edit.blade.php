
@extends('layouts\app')



@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
                <form action="{{route('todo.update',['id' => $todo->id])}}" method="post">
                    {{csrf_field()}}
                        <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="edit the todos">
                </form>
        </div>
    </div>
@stop