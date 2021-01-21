@extends('targlo.main')

@section('content')
	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>Services</h2>
			<div class="site-beradcamb">
				<a href="">Home</a>
				<span><i class="fa fa-angle-right"></i> Services</span>
			</div>
		</div>
	</section>
	<!-- Page info end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about-text">
					<h2>What is Targlo</h2>
					<h5>Targlo is a Research market intelligence platform</h5>
					<p>Targlo Research is a market intelligence platform which gives access to syndicated, customised reports and consulting to its clients at one place. As a firm with rich experience in research and consulting across multiple domains we are one stop solution that will cater to the needs of clients in key business areas. Our company has an online platform whose coverage includes industries such as Chemicals and Materials, Agriculture, Health care services, Animal feed and food & beverages among others. Our platform has Insights on markets that uncover latest market research data that’s distinct from the competition. With coverage across 10 major industries in the marketplace research, Targlo benefits thousands of companies by helping them take their innovations early to the market by providing a complete view of the market with statistical forecasts. Our strategy centric framework and value-added services will let individuals and corporates with ease of access and custom personalization to research and markets.
                    </p>
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
						<h2>1k</h2>
						<p>Reports  <br> per day</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>50k</h2>
						<p>Largest <br> Reports</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>40</h2>
						<p>Years <br> of Experience</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Get Started With Targlo Services</h2>
				<p>Start learning about Targlo with Given Documents. It’s fun, easy, and takes only a few minutes! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="{{ asset('css/targlo/img/process-icons/1.png') }}" alt="#">
						</figure>
						<h4>Ordering by Telephone</h4>
						<p>Call us at USA/Canada Toll Free XXXXXXXXXXX ( Dial XXXXXXXXXXXX for foreign customers) and talk to our customer service representative to place an order.</p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="{{ asset('css/targlo/img/process-icons/2.png') }}" alt="#">
						</figure>
						<h4>Ordering by Email</h4>
						<p>Send to sales@XXXXXXXXXXXXXX.com all your requirements and questions. Remember to provide all your information, including the address for billing & delivery, along with the chosen payment form. Within 1 business day, our executives will get in contact with you.</p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="{{ asset('css/targlo/img/process-icons/3.png') }}" alt="#">
						</figure>
						<h4>Physical Delivery</h4>
						<p>A printed copy of the published report must be sent to your address by courier within three to five working days of receipt of payment. Depending on the client's venue, shipping charges would be imposed in the case of hard copies. Targlo Research does not guarantee that the goods are in excellent condition when received and is not responsible for any loss during the goods' transit. If the substitution can be achieved at no additional cost, it is at the discretion of the publisher.</p>
					</div>
                </div>

			</div>
		</div>
	</section>
	<!-- Process section end -->
@endsection
