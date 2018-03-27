<!DOCTYPE html>
<html>
<head>
	<title>| makanmakan</title>

	<!--Bootsrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

  <!--Hovermaster css-->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css') }}">

	<!--Page css-->
    <link rel="stylesheet" href="{{ asset('assets/homepage-style.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-company-blue">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse float-right" id="navbarArea">
    <ul class="navbar-nav" id="navbarOption">

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Recipes & Menus</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center" href="#">Expert's Advices</a>
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

<div class="container" id="trending-container">
  <div class="row">
    <div class="col-4">
      <h2>Trending Recipe</h2>
    </div>
    <div class="col-8">
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-3 trending-food">
      <div class="trending-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
    <div class="col-3 trending-food">
      <div class="trending-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
    <div class="col-3 trending-food">
      <div class="trending-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
    <div class="col-3 trending-food">
      <div class="trending-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
  </div>
</div>



<div class="container" id="newest-container">
  <div class="row">
    <div class="col-8">
      <hr>
    </div>
    <div class="col-4">
      <h2>Newest Recipe</h2>
    </div>
  </div>
  
  <div class="row">
    <div class="col-3 newest-food">
      <div class="newest-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
    <div class="col-3 newest-food">
      <div class="newest-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
    <div class="col-3 newest-food">
      <div class="newest-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
    <div class="col-3 newest-food">
      <div class="newest-food-write">
      <h3>Ramen Ayam</h3>
      </div>
    </div>
  </div>
</div>


</body>
</html>