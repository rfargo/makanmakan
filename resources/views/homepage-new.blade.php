<!DOCTYPE html>
<html>
<head>
	<title>| makanmakan</title>

	<!--Bootsrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

  <!--Hovermaster css-->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css') }}">

	<!--Page css-->
    <link rel="stylesheet" href="{{ asset('assets/homepage-style-new.css') }}">

    <script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('assets/homepage-js.js') }}"></script>


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
        <a class="nav-link hvr-underline-from-center" href="#">Sign In</a>
      </li>

    </ul>
  </div>
</nav>

<div class="jumbotron">
	<div class="container-fluid">
		<h1>makanmakan</h1>
		<form class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
    			<input type="text" name="search-food" class="form-control form-control-lg" id="inputOption" placeholder="What to cook today?">
			</div>
			<button type="submit" class="btn btn-warning btn-lg mb-2 hvr-sweep-to-right">Search</button>
		</form>
		<p><ins>Advanced Search</ins></p>
	</div>
</div>


<div class="container" id="view-option">
  <div class="row">
    <h3 class="hvr-underline-from-center" id="article-option">Articles</h3>
    <h3 class="hvr-underline-from-center" id="trending-option">Trending Recipes</h3>
    <h3 class="hvr-underline-from-center" id="newest-option">Newest Recipes</h3>    
  </div>
</div>

<div class="container" id="article-container">
  <div class="row">
    <div class="col-3 article-food">
      <div class="article-food-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
    <div class="col-3 article-food">
      <div class="article-food-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
    <div class="col-3 article-food">
      <div class="article-food-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
    <div class="col-3 article-food">
      <div class="article-food-write"></div>
      <h3>Cara masak Ramen Ayam</h3>
    </div>
  </div>
</div>

<div class="container" id="trending-container">
  <div class="row">
    <div class="col-3 trending-food">
      <div class="trending-food-write"></div>
      <h3>Ramen Ayam</h3>
    </div>
    <div class="col-3 trending-food">
      <div class="trending-food-write"></div>
      <h3>Ramen Ayam</h3>
    </div>
    <div class="col-3 trending-food">
      <div class="trending-food-write"></div>
      <h3>Ramen Ayam</h3>
    </div>
    <div class="col-3 trending-food">
      <div class="trending-food-write"></div>
      <h3>Ramen Ayam</h3>
    </div>
  </div>
</div>

<div class="container" id="newest-container">
  <div class="row">
    <div class="col-3 newest-food">
      <div class="newest-food-write"></div>
      <h3>Indomie Ayam</h3>
    </div>
    <div class="col-3 newest-food">
      <div class="newest-food-write"></div>
      <h3>Indomie Ayam</h3>
    </div>
    <div class="col-3 newest-food">
      <div class="newest-food-write"></div>
      <h3>Indomie Ayam</h3>
    </div>
    <div class="col-3 newest-food">
      <div class="newest-food-write"></div>
      <h3>Indomie Ayam</h3>
    </div>
  </div>
</div>


</body>
</html>