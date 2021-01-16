@extends('targlo.main')

@section('content')
	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="site-beradcamb">
				<a href="">Home</a>
				<span><i class="fa fa-angle-right"></i> Contact us</span>
			</div>
		</div>
	</section>
	<!-- Page info end -->



	<!-- Contact section -->
	<section class="contact-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<form class="contact-form" method="post" action="/contact/store">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="First Name*:" name="firstname">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="Last Name*:" name="lastname">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="Email Adress*:" name="email">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form" type="text" placeholder="Phone Number*:" name="phone">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea placeholder="Tell us about your question!" name="message"></textarea>
								</div>


								<button class="site-btn sb-gradients mt-4">Submit form</button>
							</div>
                        </div>
                        @csrf
					</form>
				</div>
				<div class="col-lg-5 mt-5 mt-lg-0">
					<div class="map" id="map-canvas"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

@endsection
