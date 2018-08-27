@extends('layouts.template')

@section('content')
	
        <!-- //banner -->
        <section id="topchart">
            <span class="bigtxt">Enjoy ErrandPro</span><br/>
            Why dont you have us do the running around for you while you sit back and relax 
        </section>
		<!-- banner bottom -->
		<section class="banner-btm">
			<div class="container">
				<div class="row banner-bottom-main">
					
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-shield" aria-hidden="true"></span>
								<h3 class="mt-3">Secure Delivery</h3>
								<p class="mt-3 mb-3">With us your rest assured that your packages are in good hands and would be delivered on time.</p>
								
								<div class="btn btn-primary w3-button w3-indigo w3-border w3-border-white w3-round-large">
									<a href="{{ url('/about') }}">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-money" aria-hidden="true"></span>
								<h3 class="mt-3">Affordable transport</h3>
								<p class="mt-3 mb-3"> You don't have to worry too much about your pocket while trying to get that important parcel delivered.</p>
								
								<div class="btn btn-primary w3-button w3-indigo w3-border w3-border-white w3-round-large">
									<a href="{{ url('/about') }}">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 banner-btmg">
							<div class="banner-btmg1">
								<div class="form-text">
									<h3 class="text-center">Get Estimate</h3>
									<p class="text-center"></p>
								</div>
								<form action="#" method="post" class="banner_form">
									<div class="sec-left">
										<label class="contact-form-text">Pickup Point</label>
										<input placeholder="Enter pickup address " name="first name" type="text" required="">
									</div>
									<div class="sec-right">
										<label class="contact-form-text">Delivery point</label>
										<input placeholder="Enter delivery adress " name="first name" type="text" required="">
									</div>
									<input type="submit" class="btn btn-primary w3-button w3-indigo w3-border w3-border-white w3-round-large" value="Calculate">
								</form>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //banner bottom --><!--
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
        </section>-->
        <!--dapo's new section-->
        <section class="wthree-row w3-about py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Steps in using ErrandPro.</h3>
			<p class="tit text-center mx-auto">.</p>
              <div class="card-deck pt-4 mt-md-4">
				  <div class="card">
                  <div id="phonei" >
                      <div id="phonetop">
                        <img src="{{ asset ('/images/PhonetopG.png') }}" width="100%" height="width" alt="reload to get usage tips" id="toppic"/>
                      </div id="phonemid">
                        <div id=midpic>
                            <div class="banner-silder">
                                <div id="JiSlider" class="jislider">
                                    <ul>
                                        <li>
                                            <div class="banner-top banner-top1">
                                            </div>
                                        </li>


                                        <li>
                                            <div class="banner-top banner-top2">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner-top banner-top3">
                                            </div>
																				</li>
																				<li>
                                            <div class="banner-top banner-top4">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div> 
                     <div id="phonebuttom">
                     <img src="{{ asset ('/images/PhonebottomG.png') }}" width="100%" height="width" alt="reload to get usage tips" id="buttompic"/>
                      </div>
                 </div>
				  </div>
				  <div class="card">
                      <div class="sect">
                        <div class="roundtag">

                        </div>
                        <div class="txts">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Install the mobile app
                        </div>
												<div class="clrx"></div>
												<div class="linkcl"></div>
												<div class="untouched"> 
													Download our App from the google playstore. Register your profile and login to our platform
												</div>
												<div class="clrx"></div>
											</div>
											<div class="sect">
                        <div class="roundtag">

                        </div>
                        <div class="txts">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select an errand
                        </div>
												<div class="clrx"></div>
												<div class="linkcl"></div>
												<div class="untouched"> 
													Enter your personal and credit card details and then Select an errand you want us to run on your behalf
												</div>
												<div class="clrx"></div>
											</div>
											<div class="sect">
                        <div class="roundtag">

                        </div>
                        <div class="txts">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose your locations
                        </div>
												<div class="clrx"></div>
												<div class="linkcl"></div>
												<div class="untouched"> 
													Choose your preferred locations for pickup and delivery, time and date preference and all conditions you want met on delivery.
												</div>
												<div class="clrx"></div>
											</div>
											<div class="sect">
                        <div class="roundtag">

                        </div>
                        <div class="txts">
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let us run your errand<br/>
                        </div>
												<div class="clrx"></div>
												<div class="linkcls"></div>
												<div class="untouched"> 
													Our errand professional will get to your location as fast as possible to run your errands, while you Spend your time on more productive endeavours
												</div>
												<div class="clrx"></div>
                      </div>
					
				  </div>
				</div>
            </div>
        </section>
		<!-- testimonials -->
	<section class="testimonials py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3 text-white">Happy clients</h3>
				<p class="tit text-center mx-auto text-white">Here are a few of our cients from different professional fields who love our services</p>

			<div class="w3_agileits_testimonial_grids pt-4 mt-md-4">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Odole Kayode <span>Software Developer</span></h4>
										<p>This quick delivery of all my food and drinks have really helped me to have as much fun as i always wanted my weekends to be.</p>
									</div>
									<img src="{{ asset ('images/kay.jpg') }}" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Moniba Odunlami <span>Architect</span></h4>
										<p>I never knew I could have all my meals from different eatries delivered to my doorstep in very little time.</p>
									</div>
									<img src="{{ asset ('images/moniba.jpg') }}" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Mathew Oguntayo <span>Business Man</span></h4>
										<p>I love this platform, it has helped me to be able to be able send all my products to my costumers without excess movements</p>
									</div>
									<img src="{{ asset ('images/mathew.jpg') }}" alt=" " class="img-responsive" />
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
			<h3 class="tittle-w3ls text-center mb-3">Meet our trusted riders</h3>
              <div class="card-deck pt-4 mt-md-4">
				  <div class="card">
						<div class="rimage">
							<img src="{{ asset ('images/rider1.jpg') }}" class="dapo-img" width="100%" height="width" alt="Rider Image">
						</div>
						<button class="btn btn-light tiki2" type="button" data-toggle="collapse" data-target="#riderinfo" aria-expanded="false" aria-controls="errandquestion">
								James Nwachukwu
						</button>
							<div class="collapse" id="riderinfo">
									<div class="dapo-center">
											James is a very trusted bike rider with over ten years experience as an okada man in Ikorodu Lagos and has always being faithfull to his passangers.
									</div>
							</div>
				  </div>
				  <div class="card">
						<div class="rimage">
							<img src="{{ asset ('images/rider2.jpg') }}" class="dapo-img" width="100%" height="width" alt="Rider Image">
						</div>
						<button class="btn btn-light tiki2" type="button" data-toggle="collapse" data-target="#riderinfo2" aria-expanded="false" aria-controls="errandquestion">
								Yakubu Damilola
						</button>
							<div class="collapse" id="riderinfo2">
									<div class="dapo-center">
											Damilola is a very good bike rider from Abeokuta with five years experience as an okada man before relocating to Lagos and has always being faithfull to his passangers.
									</div>
							</div>
				  </div>
				  <div class="card">
						<div class="rimage">
							<img src="{{ asset ('images/rider3.jpg') }}" class="dapo-img" width="100%" height="width" alt="Rider Image">
						</div>
						<button class="btn btn-light tiki2" type="button" data-toggle="collapse" data-target="#riderinfo3" aria-expanded="false" aria-controls="errandquestion">
								Ayodeji Adeyeri
						</button>
							<div class="collapse" id="riderinfo3">
									<div class="dapo-center">
											Ayodeji is a very trusted bike rider with over seven years experience as an okada man in Ikeja Lagos and has always being faithfull to his passangers.
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
