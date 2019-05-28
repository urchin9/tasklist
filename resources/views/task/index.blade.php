@extends('layouts.app')

@section('content')

    <h3>Task List</h3>
    
    {!! link_to_route('task.create', 'Add New Task', null, ['class' => 'btn btn-dark d-sm-none']) !!}
    
    <ul class="list-group list-group-flush mt-4">
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
        <li class="list-group-item">
            <a href="{{ url('task/' . $task->id) }}">{{ $task->content }}</a>
            
        </li>
        @endforeach
    @else
        <li class="list-group-item">No Tasks Yet</li>
    @endif
    </ul>

@endsection