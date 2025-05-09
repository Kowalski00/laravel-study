@extends('layouts.default')

@section('title')
    Usuário {{$user->name}}
@endsection

@section('content')
    <h1>Mostrar usuário {{$user->name}}</h1>

        @if ($user->id === 1)
           <div>Sim</div>
        @else
           <div>Nao</div>
        @endif
@endsection
