@extends('layouts.app')

@section('content')

    <h3>Task List</h3>
    
    {!! link_to_route('task.create', 'Add New Task', null, ['class' => 'btn btn-dark d-sm-none']) !!}
    
    <ul class="list-group list-group-flush mt-4">
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
        <li class="list-group-item d-flex justify-content-between">
            <a class="col-4" href="{{ url('task/' . $task->id) }}">{{ $task->content }}</a>
            <span class="col-4">{{ $task->status }}</span>
            {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::button('<i class="fas fa-times"></i>', ['class' => 'p-0 btn btn-link', 'type' => 'submit']) !!}
            {!! Form::close() !!}

        </li>
        @endforeach
    @else
        <li class="list-group-item">No Tasks Yet</li>
    @endif
    </ul>

@endsection