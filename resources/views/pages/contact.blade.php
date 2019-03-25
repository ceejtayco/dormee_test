@extends('layouts.app')

@section('content')

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{URL::asset('public/img/page-top-bg.jpg')}}">
		<div class="container text-white">
			<h2>CONTACT US</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div id="map-canvas"></div>
			<div class="contact-info-warp">
				<p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi</p>
				<p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
				<p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="{{URL::asset('public/img/contact.jpg')}}" alt="">
				</div>
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Browse houses and flats for sale and to rent in your area</p>
						</div>
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your email">
								</div>
								<div class="col-md-12">
									<textarea  placeholder="Your message"></textarea>
									<button class="site-btn">SUBMIT NOW</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->


	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="{{URL::asset('public/img/partner/1.png')}}" alt="">
				</a>
				<a href="#">
					<img src="{{URL::asset('public/img/partner/2.png')}}" alt="">
				</a>
				<a href="#">
					<img src="{{URL::asset('public/img/partner/3.png')}}" alt="">
				</a>
				<a href="#">
					<img src="{{URL::asset('public/img/partner/4.png')}}" alt="">
				</a>
				<a href="#">
					<img src="{{URL::asset('public/img/partner/5.png')}}" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->

@stop