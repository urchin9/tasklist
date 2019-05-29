@extends('layouts.app')

@section('content')

    <h3>Task detail</h3>
    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>AddedAt</th>
            <td>{{ $task->created_at }}</td>
        </tr>
    </table>
    
    <div class="row">
        {!! link_to_route('task.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-light mr-2']) !!}
        
        {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection