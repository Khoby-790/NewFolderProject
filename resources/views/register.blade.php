<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Flower - Register</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-primary">
      <a href="#" class="navbar-brand">Flower</a>
      <a href="{{url('login')}}" class="navbar-item text-white">Login</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-6" class="left_side">
              <!-- <img src="/images/flower.jpg" height="100%" width="100%" alt=""> -->
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="container">
              <form class="" action="{{route('register_company')}}" method="post">
                @csrf
                <div class="card " style="margin-top:15px;">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                      <div class="container">
                        <div class="form-group">
                            <label for="">Company Name</label>
                            <input type="text" name="company_name" value="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Company Address</label>
                            <input type="text" name="company_address" value="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="tel" name="company_contact" value="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Company Owner</label>
                            <input type="text" name="company_owner" value="" class="form-control" required>
                        </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="company_email" value="" class="form-control" required>
                          </div>
                          <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" name="password" value="" class="form-control" required>
                          </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success" name="button">Register</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
