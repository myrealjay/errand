
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> ErrandPro</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="Errand, transport, delivery" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	 <link href="{{ URL::asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
	
	<link href="{{ URL::asset('css/JiSlider.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ URL::asset('css/w3.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

	<meta name="_token" content="{{csrf_token()}}" />

</head>

<body>
	
	<section class="errand-header py-2">
		<div class="container">
			  
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

                    <h1>
						<a class="navbar-brand" href="{{url('/')}}">
							<img src="{{ asset ('/images/logo.png') }}" height="width" width="100px" alt="LOGO." />
						</a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="{{url('customer/login')}}">Login</a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="{{url('customer/register')}}">Register</a>
                            </li>
                        </ul>
                    </div>

                </nav>
        </header>
        

		</div>
	</section>
	

        @yield('content')

	<!-- footer -->
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


	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->

	<!-- start-smooth-scrolling -->
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script> 
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
    <!-- Google API script -->
    <script>
        function initialize() {
        var input = document.getElementById('from_location');
        new google.maps.places.Autocomplete(input);
      }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
        function initialize() {
        var input = document.getElementById('to_location');
        new google.maps.places.Autocomplete(input);
      }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
   <!-- The Estimator Price -->
    <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script> -->
        <!--   $('#myForm').submit(function(){
        $('#submitBtn').html('Sending...');
    }); -->
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               var button = $(this);
        		button.val('Processing ...');
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/estimate') }}",
                  method: 'post',
                  data: {
                     from_location: jQuery('#from_location').val(),
                     to_location: jQuery('#to_location').val()
                  },
                  success: function(result){
                  	 button.val('Done');
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script>

	<!-- smooth-scrolling-of-move-up -->
	
	<script  src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="js/bootstrap.js"></script>
	 
</body>

</html>