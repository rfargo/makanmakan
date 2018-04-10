<!DOCTYPE html>
<html>
<head>
  <title>| makanmakan</title>

  <!--Bootsrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

  <!--Hovermaster css-->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css') }}">

  <!--Page css-->
    <link rel="stylesheet" href="{{ asset('assets/recipes.css') }}">

    <script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>

  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500i,700" rel="stylesheet">

</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-company-blue">
  <a class="navbar-brand" href="#">makanmakan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse float-right" id="navbarArea">
    <ul class="navbar-nav ml-auto" id="navbarOption">

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Recipes & Menus</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Expert's Advices</a>
      </li>

      <li class="nav-item disabled">
        <a class="nav-link" href="#">|</a>
      </li>


      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Sign In</a>
      </li>

      <li class="nav-item disabled">
        <a class="nav-link" href="#">or</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Sign Up</a>
      </li>

    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <h1>Advanced Search</h1>
    <br>
    <hr>
  </div>
  <div class="row">
    <div class="dropdown col-3">
      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dietary Option</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <div class="dropdown col-3">
      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Option</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <div class="dropdown col-3">
      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown button</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <div class="dropdown col-3">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Buy-able Recipe</label>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="container" id="recipe-container">
  <div class="row">
    <div class="col-3 recipe">
      <div class="recipe-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
    <div class="col-3 recipe">
      <div class="recipe-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
    <div class="col-3 recipe">
      <div class="recipe-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
    <div class="col-3 recipe">
      <div class="recipe-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/bootstrap-4.0.0/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>