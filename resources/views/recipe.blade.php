<!DOCTYPE html>
<html>
<head>
  <title>| makanmakan</title>

  <!--Bootsrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

  <!--Hovermaster css-->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css') }}">

  <!--Page css-->
    <link rel="stylesheet" href="{{ asset('assets/article.css') }}">

    <script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>

  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500i,700" rel="stylesheet">

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-company-blue">
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
    <div class="col-8" id="recipe">
      <div class="images"></div>
      <!--<img src="{{ asset('assets/images/pic1.jpg') }}"> -->
      <hr>
      <h1>Cara masak anak ayam dengan kekuatan bulan</h1>
      <h6>created by <span>Siapa ya</span> at <span>17 Agustus '45</span></h6>
      <div>
      <h6>rating <span>3.5</span>/5</h6>
      </div>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dui erat. Donec euismod sapien pulvinar, facilisis quam vel, rutrum ipsum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dui erat. Donec euismod sapien pulvinar, facilisis quam vel, rutrum ipsum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dui erat. Donec euismod sapien pulvinar, facilisis quam vel, rutrum ipsum.</p>

<hr>

      <form>
        <div class="form-group">
          <label for="comment"><strong>Leave a reply</strong></label>
          <textarea class="form-control" id="comment-area" rows="3"></textarea>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <div class="comments">
        <p class="name">My name</p>
        <p class="comment">Thank you!!!!!</p>
      </div>

      <div class="comments">
        <p class="name">My name</p>
        <p class="comment">Thank you!!!!!</p>
      </div>

  
    </div>
    <div class="col-4 " id="recommended">
      <h3>Recommended Recipes</h3>
      <hr>
      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

      <div class="recommend row">
        <div class="images col-3"></div>
        <div class="col-9">
        <h6>Test</h6>
        </div>
      </div>

    </div>
  </div>
</div>


</body>
</html>