@extends('layouts.app')

@section('content')

    <h3 class="mb-4">Add New Task</h3>
    
    <div class="row">
        <div class="col-12 mx-auto">
        {!! Form::model($task, ['route' => 'task.store']) !!}
            <div class="form-group">
                {!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Task', 'autofocus']) !!}
            </div>
            
            {!! Form::submit('Add', ['class' => 'btn btn-success btn-block']) !!}
        
        {!! Form::close() !!}
        </div>
    </div>

@endsection