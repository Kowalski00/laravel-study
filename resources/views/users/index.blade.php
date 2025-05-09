@extends('layouts.default')

@section('title', 'Listagem de usuários')

@section('content')
    <h1>{{$greeting}}</h1>
        @foreach ($users as $user )
           <div>{{$user->name}}</div>
        @endforeach
@endsection
