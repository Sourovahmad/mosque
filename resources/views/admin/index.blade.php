<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Hello, world!</title>
  <style type="text/css">
    .bg-abasas-dark {

      background-color: #2a3f5c;
      color: #fff;

    }
  </style>
</head>

<body>
  <!-- Just an image -->
  <nav class="navbar navbar-dark bg-abasas-dark">
    <a class="navbar-brand" href="#">
      {{--<img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy"> --}}
      Abasas tech
    </a>
  </nav>

  <div style="height:200px"></div>
  <div class="container-fluid">
    <div class="card mb-4 shadow">


      <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar navbar-dark ">
          <a class="navbar-brand"> New Post</a>

        </nav>
      </div>

      <div class="card-body">
        <form method="POST" action="https://demos.abasas.tech/pzos/beta/categories">
          <input type="hidden" name="_token" value="ubw8zglxbPXGV7Hv5i3w1DaWAXCsm9XCucy1i8q6">
          <div class="form-row align-items-center">
            <div class="col-12">
              <span class="text-dark pl-2"> Title</span>
              <input type="text" name="name" class="form-control mb-2" id="inlineFormInput" placeholder="title" required>
            </div>
            <div class="col-12">

              <span class="text-dark pl-2">Description</span>
              <textarea type="text" name="description" size="55" class="form-control mb-2" id="inlineFormInput" required> </textarea>
            </div>




       

            <div class="col-12">
    <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                
              </div>
              <span class="text-dark pl-2">Image</span>
              <input type="file" name="description" size="55" class="form-control mb-2" id="inlineFormInput">
            </div>

            <div class="col-10">

              <span class="text-dark pl-2">Video</span>
              <textarea type="text" name="description" size="55" class="form-control mb-2" id="inlineFormInput" required> </textarea>
            </div>


            <div class="col-auto">
              <button type="submit" class="btn btn-primary mt-3">সাবমিট</button>
            </div>

          </div>

        </form>
      </div>
    </div>




    <table class="table table-striped">
      <thead>
        <tr class="bg-dark text-light">
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>

      <tfoot>
        <tr class="bg-dark text-light">
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>