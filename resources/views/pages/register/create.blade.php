@extends('layouts.app')
<div style="background-image: url('{{ asset('public/img/bg/sunset_bldg.jpg') }}'); background-repeat: no-repeat; 
  background-size: 100%; 
  background-attachment: fixed; 
  background-position: bottom;">

  @section('content')
  <div class="container my-5 space-vertical">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mx-4">
          <div class="card-body p-4 text-center">
            @guest 
            <h1>Registration</h1>
            <p class="text-muted">Create your free account</p>
            @include('forms.register')
            @else
            You're already logged in.
            @endauth
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection