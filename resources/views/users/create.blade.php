@extends('layouts.default')

@section('title', 'Cadastro de usuários')

@section('content')
    <h1 class="title">Cadastro</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        {{ $errors->any() }}
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div> {{ $error }} </div>
            @endforeach
        @endif
        <div>
            <label for="">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="">Senha</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection
