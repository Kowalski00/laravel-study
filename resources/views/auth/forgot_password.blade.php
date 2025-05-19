@extends('layouts.auth')

@section('body-class','login-page')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Reset your password</p>
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            @session('status')
            <div class="alert alert-success">
                {{$value}}
            </div>
            @endsession
          <div class="input-group mb-3">
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " placeholder="Email" value="{{ old('email') }}" />
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <!--begin::Row-->
          <div class="row">
                <button type="submit" class="btn btn-primary">Send me the link</button>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
</div>
@endsection

