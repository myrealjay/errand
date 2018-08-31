
	
<link href="{{ URL::asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	

<footer>
	<section class="footer py-md-5">
		<div class="container py-4 mt-2">
		<div class="row footer_inner_info_w3ls_agileits">
			<div class="col-md-3 sign-gd justice">
				<a href="{{url('/')}}"><img src="{{ asset ('/images/logo.png') }}" height="width" width="100px" alt="LOGO." /></a>
				<p class="mb-3 mt-3">Errandpro is your professional personal assistant. We help you run errands so you can focus on whatís important. Errandpro is your go to errand service provider.</p>
			</div>
			
					<div class="col-md-3 sign-gd">
						<h4>Know us</h4>
						<ul>
							<li><a href="{{ url('/about') }}">About Us</a></li>
							<li><a href="{{ url('/terms') }}">Terms of Service</a></li>
							<li><a href="{{ url('/delivery') }}">Delivery Policy</a></li>
							<li><a href="{{ url('/riferregistration') }}">Become a Rider</a></li>
							<li><a href="{{ url('/blog') }}">Blog</a></li>
							<li><a href="{{ url('/faq') }}">FAQs</a></li>
							<li><a href="{{ url('/driver/login') }}">Driver's Login</a></li>
						</ul>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Contact us</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>+1 234 567 8901</h6>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6><a href="mailto:info@okbestate.com"> Info@okbestate.com</a></h6>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>18 Lanre Awolokun street Gbagada express way.</h6>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd-two">
						<center><h4>Download Mobile App</h4></center>
                        <div class="linkimg">
							<a href="{{ url ('/') }}"><img src="{{ asset ('/images/play-store.png') }}" width="100%" class="storeimg" height="width" alt="dpwnload on Play store"/></a>
						</div><br/><br/>
                        <div class="linkimg">
							<a href="{{ url ('/') }}"><img src="{{ asset ('/images/app-store.png') }}" width="100%" class="storeimg" height="width" alt="dpwnload on Play store"/></a>
						</div><br/>
						<div class="media-links">
							<ul>
								<li><a href="{{ url ('/') }}"><span class="fa fa-facebook fonticon"  aria-hidden="true"></span></a></li>&nbsp;
								<li><a href="{{ url ('/') }}"><span class="fa fa-twitter fonticon"  aria-hidden="true"></span></a></li>&nbsp;
								<li><a href="{{ url ('/') }}"><span class="fa fa-instagram fonticon"  aria-hidden="true"></span></a></li>&nbsp;
								<li><a href="{{ url ('/') }}"><span class="fa fa-linkedin fonticon"  aria-hidden="true"></span></a></li>
							</ul>
						</div>
					</div>
		</div>
	</div>
	</section><!--Waiting for website address by Dapo-->
	<p class="copy-right py-3">&copy 2018 Errand pro Limited</p>
	<!-- //footer -->
</footer>
