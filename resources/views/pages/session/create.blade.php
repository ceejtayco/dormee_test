@extends('layouts.app')
<div style="background-image: url('{{ asset('public/img/bg/bldg_girl.jpg') }}'); background-repeat: no-repeat; 
  background-size: 100%; background-attachment: fixed; 
  background-position: center;">
  @section('content')
<div class="container space-vertical">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            @guest
            <h1>Login</h1>
            <p class="text-muted">Sign in to your account</p>
            @include('forms.login')

          </div>
        </div>


      </div>
    </div>
    <div class="col-md-12 card text-white bg-primary py-5 d-md-down-none w-100">
      <div class="card-body text-center">
        <div>
          @include('forms.sign_up')
        </div>
      </div>
    </div>
    @else
    You're already logged in.
    @endauth
  </div> 
</div>
 
</div>

@endsection
