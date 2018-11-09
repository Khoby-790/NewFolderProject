<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <nav class="navbar sticky-top navbar-dark bg-primary">
      <a href="#" class="navbar-brand">Flower</a>
      <a href="{{url('register')}}" class="navbar-item text-white">User Name</a>
    </nav>

    <div class="jumbotron">
        <div class="row">
          <div class="col-md-6">
            <h2>Welcome User Name</h2>
            <button type="button" class="btn btn-lg btn-primary" name="button">Add Flower</button>

          </div>
          <div class="col-md-6">
              <!-- <button type="button" class="btn btn-lg btn-primary" name="button">Add Flower</button> -->
          </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="card" style="margin-top:30px;">
                  <table class="table">
                    <thead>
                      <th>Index</th>
                      <th>Flower Name</th>
                      <th>Flower Type</th>
                      <th>Price/unit</th>
                      <th>Quantity</th>
                      <th>Actions</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Azoria</td>
                        <td>Medicinal</td>
                        <td>Ghc 45.00</td>
                        <td>14</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" name="button">View</button>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger" name="button">Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </body>

  <script type="text/javascript" src="{{asset('js/app.js')}}">

  </script>
</html>
