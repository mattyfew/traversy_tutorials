@extends('layouts.app')

@section('content')
    <a href="/traversy_tutorials/todolist/public/todo/{{$todo->id}}" class="btn btn-default">Back</a>
    <h1>Edit Todo</h1>

    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'post']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextarea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
