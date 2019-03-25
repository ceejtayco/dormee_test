@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card-group">
      <div class="card p-4">
        <div class="card-body">
          <h1>Login</h1>
          <p class="text-muted">Sign in to your account</p>
          <form method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
              </div>
              <input class="form-control" name="username" type="text" placeholder="Username">
            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input class="form-control" name="password" type="password" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-6">
                <button class="btn btn-primary px-4" type="submit">Login</button>
              </div>
              <div class="col-6 text-right">
                <button class="btn btn-link px-0" type="button">Forgot password?</button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
        <div class="card-body text-center">
          <div>
            <h2>Sign up</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="btn btn-primary active mt-3" type="button" onclick="window.location.href='register'">
              Register Now!
            </button> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@stop