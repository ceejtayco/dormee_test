@extends('layouts.app')


@section('content')
<div class="pt-5 px-4 text-white bg-primary" style="background-image:url('{{asset('public/img/bg/group_peeps_2.jpg')}}'); background-position: bottom; height: 500px; background-size: cover; padding: 0;">
    <div class="pt-5 container" style="background-color: rgba(0, 0,0,0.6); height: 200px;">
      <div class="row">
        <div class="col-md-6 text-md-left text-center align-self-center my-5">
          <h1 class="display-1">Roommates</h1>
          <p class="lead">Search for the right one.&nbsp;</p>
          <div class="row mt-5">
            <div class="col-md-5 col-6">
              <a href="#">
         
            </div>
            <div class="col-md-5 col-6">
              <a href="#">
                
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" style="width:100%;">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop