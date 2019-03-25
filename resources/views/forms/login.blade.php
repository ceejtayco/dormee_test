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
