@extends('layouts.auth')

@section('body-class','login-page')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " placeholder="Email" value="{{ old('email') }}" />
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " placeholder="Password" />
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <!--begin::Row-->
          <div class="row">
                <button type="submit" class="btn btn-primary">Login</button>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <div class="mt-2 text-center">
            <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
            <p class="mb-0">
              <a href="register.html" class="text-center"> Register a new membership </a>
            </p>
        </div>
      </div>
      <!-- /.login-card-body -->
    </div>
</div>
@endsection
