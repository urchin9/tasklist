@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2 class="m-4">MyTaskList</h2>
        {!! link_to_route('signup.get', 'Get Started', [], ['class' => 'btn btn-success btn-lg']) !!}
    </div>
@endsection