<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel/Response</title>

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- Outsource -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/autocomplete_ajax.js"></script>
	<script type="text/javascript" src="js/DOMhtml.js"></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="fonts/themify-icons.css">
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="flex-center position-ref full-height">

			<div class="content">
				<div class="title m-b-md">
					Response
				</div>
				
				<div class="card bg-light mb-3 card-custom">
					<div class="row card-element">
						<div class="col-md-2">Airl</div>
						<div class="col-md-1">Ori</div>
						<div class="col-md-2">Time</div>
						<div class="col-md-1">Des</div>
						<div class="col-md-1">Nonstop</div>
						<div class="col-md-1">CLASS</div>
						<div class="col-md-3">Price</div>
						<div class="col-md-1">Button</div>
					</div>
				</div>
				
				<div class="card card-body card-return-body">
					<div class="row element-body">
						<div class="col-md-2">Airl</div>
						<div class="col-md-1">Ori</div>
						<div class="col-md-2">Time</div>
						<div class="col-md-1">Des</div>
						<div class="col-md-1">Nonstop</div>
						<div class="col-md-1">CLASS</div>
						<div class="col-md-3">Price</div>
						<div class="col-md-1">Button</div>
					</div>
					<div class="line-seperate-return"></div>
					<div class="row element-body">
						<div class="col-md-2">Airl</div>
						<div class="col-md-1">Ori</div>
						<div class="col-md-2">Time</div>
						<div class="col-md-1">Des</div>
						<div class="col-md-1">Nonstop</div>
						<div class="col-md-1">CLASS</div>
						<div class="col-md-3">Price</div>
						<div class="col-md-1">Button</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 footerleft ">
					<div class="logofooter"> Logo</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
					<p><i class="ti-location-pin"></i> Dorm B, Vietnam National University - University of Information Technology</p>
					<p><i class="ti-mobile"></i> +84 947 402 164</p>
					<p><i class="ti-email"></i> admin@request.com</p>

				</div>
				<div class="col-md-2 col-sm-6 paddingtop-bottom">
					<h6 class="heading7">General links</h6>
					<ul class="footer-ul">
						<li><a href="#"> Career</a></li>
						<li><a href="#"> Privacy Policy</a></li>
						<li><a href="#"> Terms & Conditions</a></li>
						<li><a href="#"> Client Gateway</a></li>
						<li><a href="#"> Ranking</a></li>
						<li><a href="#"> Case Studies</a></li>
						<li><a href="#"> Frequently Ask Questions</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 paddingtop-bottom">
					<h6 class="heading7">Notifications</h6>
					<div class="post">
						<p>lorem ipsum dolor sit amet consectetur adipiscing elit sed diam<span>August 8, 2017</span></p>
						<p>lorem ipsum dolor sit amet consectetur adipiscing elit sed diam<span>August 8, 2017</span></p>
						<p>lorem ipsum dolor sit amet consectetur adipiscing elit sed diam<span>August 8, 2017</span></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 paddingtop-bottom">
					<ul class="footer-ul">
						<div class="container">
							<a class="btn-social btn-google-plus"><i class="ti-google"></i></a>
							<a class="btn-social btn-jsfiddle"><i class="ti-jsfiddle"></i></a>
							<a class="btn-social btn-github"><i class="ti-github"></i></a>
							<a class="btn-social btn-facebook"><i class="ti-facebook"></i></a>
							<a class="btn-social btn-youtube"><i class="ti-youtube"></i></a>
							<a class="btn-social btn-linkedin"><i class="ti-linkedin"></i></a>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>© DuytanProject 2016 - All right reserved </p>
					</div>
					<div class="col-md-6">
						<ul class="bottom_ul">
							<li><a href="#">DuytanProject</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Faq's</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


	</body>
	</html>