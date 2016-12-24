<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script> <![endif]-->
	<!-- Place favicon.ico in the root directory -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/style.css">


	@yield("head")
</head>
<body>
	<a href="#" class="back-to-top" style="text-align: center;"><i class="fa fa-times fa-arrow-circle-up" style="color: white; font-size: 50px;"></i></a>

				<!--  login -->
	<div class="pen-title" style="display: none;">
		<!-- <h1>Flat Login Form</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span> -->
	</div>
	<!-- Form Module-->
	<div class="module form-module" style="position: fixed;">
		<div class="toggle"><i class="fa fa-times fa-pencil"></i>
			<!-- <div class="tooltip">Sign Up</div> -->
		</div>
		<div class="form">
			<h2>Login to your account</h2>
			<form>
				<input type="text" placeholder="Username"/>
				<input type="password" placeholder="Password"/>
				<button>Login</button>
			</form>
		</div>
		<div class="form">
			<h2>Create an account</h2>
			<form>
				<input type="text" placeholder="Username"/>
				<input type="password" placeholder="Password"/>
				<input type="email" placeholder="Email Address"/>
				<input type="tel" placeholder="Phone Number"/>
				<button>Register</button>
			</form>
		</div>
		<div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
	</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<!-- <script src='http://codepen.io/andytran/pen/vLmRVp.js'></script> -->

			<script src="js/login.js"></script>
			<!-- End login -->

	@include("partials/header")
	@yield("content")
	@include("partials/footer")
	<!-- Scripts -->


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>

	<script src="js/backtotop.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/showHide.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<!-- <script src="{{ URL::asset('assets/js/demo.js') }}"></script> -->

	@yield("scripts")
</body>
</html>
