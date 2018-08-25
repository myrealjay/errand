@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
/* Make the image fully responsive */
.carousel-inner img {
	width: 100%;
	height: 100%;
}
</style>
<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active lt-black">
			<img src="{{ asset('images/curr3.jpg') }}" alt="Los Angeles" width="1100" height="500" style="height: 450px;">
			<div class="carousel-caption lt-black">
				<h3>Beat the lagos traffic</h3>
				<p class="w3-text-white">Send items, percels etc as fast as possible beating the hectic traffic...</p>
			</div>   
		</div>
		<div class="carousel-item">
			<img src="{{ asset('images/curr4.jpg') }}" alt="Chicago" width="1100" height="500"  style="height: 450px;">
			<div class="carousel-caption lt-black">
				<h3>Mainland <--> Island</h3>
				<p class="w3-text-white">Want to quickly get something from the Mainland from the Island and vice-versa, lets do that for you</p>
			</div>   
		</div>
		<div class="carousel-item">
			<img src="{{ asset('images/curr2.png') }}" alt="New York" width="1100" height="500" style="height: 450px;">
			<div class="carousel-caption lt-black">
				<h3>In need to transfer an item</h3>
				<p class="w3-text-white">Do you have an item you need to transfer to and fro? let do that for you</p>
			</div>   
		</div>
	</div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>
<div class="col-sm-12 w3-light-grey">
	<div class="col-sm-12 text-justify">
		<div class="container">
			<p>&nbsp;</p>
			<h3>About us</h3>
			<p>Errandpro is your professional personal assistant. We help you run errands so you can focus on whatís important. Whether you want to be in two places at a time, or you have a busy day, or you want to spend more time with loved ones. Errandpro is your go to errand service providers. With our dedicated team of professionals, we take stress of the hustle and bustle off you day, so that you can always find time to sit back, relax, and enjoy life without stress.</p>
			<p>&nbsp;</p>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<div class="w3-card col-sm-12 container">
		<header class="w3-container">
			<h3>Our services</h3>
		</header>
		<div class="w3-container">
			<p></p>
			<h6>Courier Service</h6>
			<p>Do you need to get documents, parcels and other items delivered fast and securely? With Errandpro, you can have peace of mind that your documents and other important items will be delivered safely and as fast as possible.</p>
			<h6>Grocery shopping and Deliveries</h6>
			<p>Do you need to go grocery shopping but got held up with other important engagement?
			Thatís not a problem, you can send us your list and let us be your personal grocery shopper. Errandpro will help you avoid the time and hassle of grocery shopping. Rather than going through the stress of grocery shopping, you can choose to spend your time to focus on whatís important.</p>
			<h6>Meal Delivery</h6>
			<p>Do you have a favourite restaurant you love to eat but they donít do deliveries? Thatís fine because we will pick up your food and deliver it to you or your colleagues at work as fast as possible.</p>
			<h6>Dry cleaners ñ Delivery and Pick up</h6>
			<p>Do you struggle to find time needed to drop off and pick up your clothing items from the dry cleaners? Thatís no problem because with Errandpro you can schedule a pick up time from your location and which dry cleaners you want us to submit your clothes and when the job is finished we can deliver your clothes to your residence. Think of all the productive time and energy you will save by having someone else do this job for you.</p>
			<p>&nbsp;</p>
		</div>
	</div>
</div>
<p></p>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<div class="col-sm-12 down">
	<p>&nbsp;</p>
	<div class="container w3-center row">
		<div class="col-sm-1"></div>
		<div class="col-sm-2"><i class="fas fa-user font"></i><br>User friendly platform</div>
		<div class="col-sm-2"><i class="fas fa-globe-africa font"></i><br>Secure and speedy deliveries</div>
		<div class="col-sm-2"><i class="fas fa-credit-card font"></i><br>Easy payment system</div>
		<div class="col-sm-2"><i class="fas fa-cog font"></i><br>Excellent customer support</div>
		<div class="col-sm-2"><i class="fas fa-users font"></i><br>Trustworthy and reliable team</div>
		<div class="col-sm-12" style="height: 40px;"></div>
	</div>
</div>
@endsection













