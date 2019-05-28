@extends('layouts.app')

@section('content')

    <h3>Edit Task</h3>
    
    <div class="row">
        <div class="col-12">
            {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Task']) !!}
                </div>
                
                {!! Form::submit('Update', ['class' => 'btn btn-light']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection