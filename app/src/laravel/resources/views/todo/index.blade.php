<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | HOME</title>
</head> -->
@extends('layouts.app')

@section('content')
<!-- <body> -->

    <h1> All your ToDos... </h1>
    <h3>
        <a href="/create">Create</a>
    </h3>
    <h3>
        <x-alert />
    </h3>
    
    @foreach($todos as $todo)
        <li>
            @if($todo->completed)
                <span style="text-decoration:line-through">{{$todo->title}}</span>
            @else
                {{$todo->title}}
            @endif
            <a href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>
            <a href="{{asset('/' . $todo->id . '/completed')}}">Completed</a>
            <a href="{{asset('/' . $todo->id . '/delete')}}">Delete</a>
        </li>
    @endforeach
@endsection
<!-- </body> -->
<!-- </html> -->