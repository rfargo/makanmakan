<!DOCTYPE html>
<html>
<head>
	<title>| makanmakan</title>

	<!--Bootsrap css-->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

  <!--Hovermaster css-->
    <link rel="stylesheet" href="{{ asset('assets/Hover-master/css/hover.css') }}">

	<!--Page css-->
    <link rel="stylesheet" href="{{ asset('assets/sign.css') }}">

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

<div class="jumbotron" id="sign-up">
	<div class="container-fluid">
		<h1>sign up</h1>
		<div class="col-6 offset-xl-3">
		<form>
      <div class="form-row">
        <div class="col">
          <label for="signup-firstname">First Name *</label>
          <input type="firstname" class="form-control form-control-lg" id="signup-firstname" aria-describedby="firstnameHelp" placeholder="First name" required>
        </div>
        <div class="col">
          <label for="signup-lastname">Last Name *</label>
          <input type="lastname" class="form-control form-control-lg" id="signup-lastname" aria-describedby="lastnameHelp" placeholder="Last name" required>
        </div>
      </div>

			<div class="form-group">
		    	<label for="signup-username">Username *</label>
    			<input type="username" class="form-control form-control-lg" id="signup-username" aria-describedby="usernameHelp" placeholder="Username" required>
			</div>
      <div class="form-group">
          <label for="signup-email">Email *</label>
          <input type="email" class="form-control form-control-lg" id="signup-email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>
			<div class="form-group">
			    <label for="signup-password">Password *</label>
			    <input type="password" class="form-control form-control-lg" id="signup-password" placeholder="Password" required>
			</div>
      <div class="form-group">
          <label for="signup-repassword">Re-enter Password </label>
          <input type="repassword" class="form-control form-control-lg" id="signup-repassword" placeholder="Re-Enter Password" required>
      </div>
			<button type="submit" class="btn btn-lg btn-warning hvr-sweep-to-right">Sign Up</button>
		</form>
		</div>
    <p>Have an account?  <span>sign in!</span></p>
	</div>
</div>

<script>
  $(window).scroll(function(){
  if($(this).scrollTop() < 50){
    $(".navbar").css("background-color","transparent");
  }

  if($(this).scrollTop() > 50){
    $(".navbar").css("background-color","#FF6200");
  }
});
</script>

</body>
</html>