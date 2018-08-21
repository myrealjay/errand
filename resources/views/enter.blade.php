@extends('layouts.template')

@section('content')
	<!-- banner -->
	<section class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>Quick Item delivery</h3>
								<p>Easily send items from one place to the other with maximum safety guarantee.</p>
							</div>
						</div>
					</div>
				</li>


				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>Food Delivery</h3>
								<p>Just sit back and let us deliver Your meals from your favourite eatries to your doorstep</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Multiple errands</h3>
								<p>Why dont you have us do the running around for you while you sit back and relax </p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</section>
		<!-- //banner -->
		<!-- banner bottom -->
		<section class="banner-btm">
			<div class="container">
				<div class="row banner-bottom-main">
					
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-globe" aria-hidden="true"></span>
								<h3 class="mt-3">Errand Advantage</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.consectetur adipiscing elit</p>
								
								<div class="read-btn">
									<a href="{{ url('/about') }}">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-user" aria-hidden="true"></span>
								<h3 class="mt-3">Secure transport</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.consectetur adipiscing elit</p>
								
								<div class="read-btn">
									<a href="{{ url('/about') }}">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 banner-btmg">
							<div class="banner-btmg1">
								<div class="form-text">
									<h3 class="text-center">Get Delivery price</h3>
									<p class="text-center"></p>
								</div>
								<form action="#" method="post" class="banner_form">
									<div class="sec-left">
										<label class="contact-form-text">Pickup Point</label>
										<input placeholder="Street Address or ZIP code " name="first name" type="text" required="">
									</div>
									<div class="sec-right">
										<label class="contact-form-text">Delivery point</label>
										<input placeholder="Street Address or ZIP code " name="first name" type="text" required="">
									</div>
									<input type="submit" value="Check price">
								</form>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //banner bottom -->
		<section class="wthree-row w3-about py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Steps in using ErrandPro.</h3>
			<p class="tit text-center mx-auto">consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
              <div class="card-deck pt-4 mt-md-4">
				  <div class="card">
					<img src="{{asset ('images/step1.png') }}" class="img-fluid"  alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Step 1</h5>
					  <p class="card-text mb-3 ">Install the erand pro mobile App.</p>
					</div>
				  </div>
				  <div class="card">
					<img src="{{asset ('images/step2.png') }}" class="img-fluid"  alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Step 1</h5>
					  <p class="card-text mb-3 ">This is second and simplest step in using errand pro.</p>
					</div>
				  </div>
                  <div class="card">
					<img src="{{asset ('images/step3.png') }}" class="img-fluid"  alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Step 1</h5>
					  <p class="card-text mb-3 ">This is third and simplest step in using errand pro.</p>
					</div>
				  </div>
				</div>
            </div>
        </section>
		<!-- testimonials -->
	<section class="testimonials py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3 text-white">Happy clients</h3>
				<p class="tit text-center mx-auto text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>

			<div class="w3_agileits_testimonial_grids pt-4 mt-md-4">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Odole Kayode <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="{{ asset ('images/ts1.jpg') }}" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Odole kayode <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="images/ts1.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Mario Andretti <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="images/ts3.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</section>
<!-- //testimonials -->
<!-- smooth-shipping -->
	<section class="wthree-row w3-about py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Reasons why u Need Errand pro.</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
              <div class="card-deck pt-4 mt-md-4">
				  <div class="card">
					<img src="images/g1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Moving Worldwide</h5>
					  <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="images/g2.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Every day is moving day</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="images/g3.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Third Party Services</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				</div>
            </div>
        </section>
<!-- //smooth-shipping -->
<!-- distance -->

<!-- //stats -->

@endsection
