@extends('targlo.main')

@section('content')

	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>About Us</h2>
			<div class="site-beradcamb">
				<a href="">Home</a>
				<span><i class="fa fa-angle-right"></i> About Us</span>
			</div>
		</div>
	</section>
	<!-- Page info end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about-text">
					<h2>What is Bitcoin</h2>
					<h5>Bitcoin is an innovative payment network and a new kind of money.</h5>
					<p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</p>
					<a href="" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
				</div>

				<div class="about-img col-md-6">
					<img src="{{ asset('css/targlo/img/about-img.png') }}" alt="">
				</div>
		    </div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>60</h2>
						<p>Support <br> Countries</p>
						<i class="ti-basketball"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>12K</h2>
						<p>Transactions  <br> per hour</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>5B</h2>
						<p>Largest <br> Transactions</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>240</h2>
						<p>Years <br> of Experience</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="about-img col-md-6">
					<img src="{{ asset('css/targlo/img/about-img.png') }}" alt="">
				</div>
				<div class="col-md-6 about-text">
					<h2>What is Bitcoin</h2>
					<h5>Bitcoin is an innovative payment network and a new kind of money.</h5>
					<p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</p>
					<a href="" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
				</div>

			</div>

		</div>
	</section>
	<!-- About section end -->

@endsection