<!DOCTYPE html>
<html lang="en">
<head>
	<title>Targlo - Landing Page Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Targlo Landing Page Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/targlo/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/targlo/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/targlo/css/themify-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/logout.css')}}"/>


	<link rel="stylesheet" href="{{asset('css/targlo/css/style.css')}}"/>

</head>
<body>


	<!-- Header section -->

    <header class="header-section">
		<div class="upper-header">

            @if (JWTAuth::user())
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <form action="Logout" method="post" class="logout">
                <input type="hidden" name="token" value={{ $token }} >
                <input type="submit" value="Logout">
                @csrf
            </form>
            @endif

            <a href="/api/Login/view"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
		  <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>www.targlo.com</a>
		  <a href=""><i class="fa fa-phone" aria-hidden="true"></i>444 444 4444</a>
		</div>
		<div class="lower-header">
		  <nav class="navbar navbar-expand-md navbar-dark">

			<a href="index.html" class="site-logo">
			  <img src="{{ asset('css/targlo/img/logo.png') }}" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				  <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item dropdown position-static" id="superMenu">
				  <a class="nav-link dropdown-toggle" href="/industry" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Industry
				</a>
				  <div class="dropdown-menu rounded-0 bg-light w-100 border-0 m-0 p-0 shadow-sm" aria-labelledby="navbarDropdown">
					<div class="container-fluid">
					  <div class="row">

                    @for ($i = 0; $i <count($indus); $i++)
                    <div class="col-12 col-md-4  py-sm-4 py-0 text-sm-center">
						<ul>

						  <li><a href="/report/{{$indus[$i]->Meta_Title }}">{{ $indus[$i]->Meta_Title}}</a></li>


						</ul>

                    </div>
                    @endfor



					</div>
					</div>
				  </div>
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="/service">Services</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="/aboutus">About</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link " href="/contactus">Contact</a>
				</li>
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
			  </form>

		  </div>

		  </nav>
		</div>
		  </header>
		<!-- Header section end -->
	<main>
        @yield('content')
    </main>


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Subscribe to our Newsletter</h2>
					<p>Sign up for our weekly industry updates, insider perspectives and in-depth market analysis.</p>
				</div>
				<div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
					<form class="newsletter-form">
						<input type="text" placeholder="Enter your email">
						<button>Get Started</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
					<img src="img/logo-white.png" class="mb-4" alt="">
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum.</p>

				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>

					</ul>

				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>

					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<p>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
					</p>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="">DPA</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="">support@company.com</a></li>
							<li><a href="">(123) 456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/targlo/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/targlo/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/targlo/js/map.js') }}"></script>
	<script src="{{ asset('js/targlo/js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- slick slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>
</html>
