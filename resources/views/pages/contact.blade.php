@extends('layouts.master')
@section('content')

		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			
			<div class="container">

					<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.7637540973074!2d47.98250041509965!3d29.37720578213006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf849441e71957%3A0x5917ce3248898c70!2sSAWABER+6+Building!5e0!3m2!1sen!2skw!4v1517997257932" width="1140" height="606" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="row">
							<div class="col-lg-4">
								<h4>Kuwait Headquarters Office
									</h4>
								
								<p>	<i class="fa fa-map-marker"></i>	Bneid Al Gar–Istiklal Street,Flex Tower,Kuwait</p>
								<p>	<i class="glyphicon glyphicon-earphone"></i>	T. +965 22564296</p>
								<p>	<i class="fa fa-fax"></i>	F. +965 22564269</p>
								<p>	<i class="glyphicon glyphicon-envelope"></i>		P.O. Box: 20982 Safat, 13070 Kuwait</p>
								<p>	<i class="fa fa-envelope"></i>		E. info@pmiq8.com		</p>
													
									</div>
							<div class="col-lg-4">
								<h4>Lebanon Office
									</h4>

	
									<p>	<i class="fa fa-map-marker"></i>	Down Town, Azaria, Block 3, Suite 201-221, Beirut Lebanon</p>
									<p>	<i class="glyphicon glyphicon-earphone"></i>		T. +965 6276682</p>
									<p>	<i class="glyphicon glyphicon-envelope"></i>		P.O. Box 90718 Beirut, Jedeit Elmatn</p>
								
							</div>
							<div class="col-lg-4">
								<h4>Bahrain Office
									</h4>

									<p>	<i class="fa fa-map-marker"></i>	Zamil Tower, 10th Floor, Office 101, Manama City Center, Kingdom of Bahrain
									</p>
									<p>	<i class="glyphicon glyphicon-earphone"></i>			T. +973 17243990
									</p>
									<p>	<i class="fa fa-fax"></i>		
										F. +973 17243991</p>
		</div>
						</div>
						<h3>Our Services</h3>
						<p>
								We offer a full spectrum of professional services that apply effective management techniques to planning, design and construction of a project from inception to completion for the purpose of controlling time, cost and quality. In addition to this, we provide value engineering, cost estimating services and claim prevention systems.</p>
							<hr>
							<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<h2>Contact us <small>get in touch with us by filling form below</small></h2>
										<hr class="colorgraph">
										<div id="sendmessage">Your message has been sent. Thank you!</div>
										<div id="errormessage"></div>
										<form>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Name" />
												</div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Your Email"/>
												</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Subject"/>
												</div>
											<div class="form-group">
												<textarea class="form-control" rows="5" placeholder="Message"></textarea>
												</div>
				
											<div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Send Message</button></div>
										</form>
										<hr class="colorgraph">
				
									</div>
								</div>
			</div>
		</section>

	
		@endsection