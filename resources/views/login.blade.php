<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flower - Login</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-primary">
      <a href="#" class="navbar-brand">Flower</a>
      <a href="{{url('register')}}" class="navbar-item text-white">Register</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6" class="left_side">
              <!-- <img src="/images/flower.jpg" height="100%" width="100%" alt=""> -->
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="container">

              @if (Session::has('msg'))
                <div class="alert alert-success" style="margin-top:30px;">
                    <ul class="list-unstyled text-white">
                        <li>{!! Session::get('msg') !!}</li>
                    </ul>
                </div>
                @endif

              <form class="" action="{{route('log_company_user')}}" method="post">
                @csrf
                <div class="card " style="margin-top:100px;">
                    <div class="card-header">
                        LOGIN
                    </div>
                    <div class="card-body">
                      <div class="container">
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="email" value="" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" name="password" value="" class="form-control" required>
                          </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success" name="button">Login</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
