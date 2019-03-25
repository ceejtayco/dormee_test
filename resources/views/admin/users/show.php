@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card mx-4">
      <div class="card-body p-4 text-center">
        <h1>Admin</h1>
        
        @include('forms.register')
      </div>
    </div>
  </div>
</div>
</div>

@stop