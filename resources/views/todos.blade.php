
@extends('layouts\app')



@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
                <form action="{{route('todo.store')}}" method="post">
                    {{csrf_field()}}
                        <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todos">
                </form>
        </div>
    </div>
    <div class="task">
            @foreach($todos as $todo)
                <span class="task-todo">
                    {{$todo -> todo}}
                    <a href="{{ route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger btn-lg">DELETE</a>
                    <a href="{{ route('todo.edit',['id' => $todo->id])}}" class="btn btn-info btn-lg">EDIT</a>
                @if(!$todo->completed)
                    <a href="{{ route('todo.complete',['id' => $todo->id])}}" class="btn btn-success btn-lg">MARK AS COMPLETE</a>
                @else
                    <span text-success>COMPLETED</span>
                @endif
                </span>
                
                <br>
            @endforeach
    </div>
@stop