@extends('layouts.master')
@section('content')

		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a></li>
							<li class="active">Risk Management</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
					
							<article>
									<div class="post-image">
										<div class="post-heading">
											<h3><a href="#">Risk Management	</a></h3>
										</div>
										<img src="{{asset('img/services/risk-management-icon.jpg')}}" alt="" class="img-responsive" />
									</div>
									<p>
											Construction professionals need to know how to balance the contingencies of risk with their specific contractual, financial, operational and organizational requirements. In order to achieve this balance, proper risk identification and risk analysis is required. The risk management process entails identifying construction risks and exposures, and formulating an effective risk management strategy to mitigate the potential for loss.
										<p>	<b>Why do you need risk analysis</b>
											</p>
									<ul list-style-type:"disc">
										<li>Minimize management by crisis</li>
									
										<li>Minimize surprises and Problems</li>
										<li>increase probability of project success</li>
										<li>Better handle on true costs and schedules by properly estimating contingencies</li>
									</ul>


										</article>
				
						<div class="clear"></div>
					</div>
					<div class="col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<form role="form">
									<div class="form-group">
										<input type="text" class="form-control" id="s" placeholder="Search..">
									</div>
								</form>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Recent Projects</h5>
								<ul class="hide-bullets">
										<li class="col-sm-3">
											<a class="thumbnail" id="carousel-selector-0">
												<img src="img/proj/fetira-66x66.jpg">
											</a>
										</li>
					
										<li class="col-sm-3">
											<a class="thumbnail" id="carousel-selector-1"><img src="img/proj/sidiq-66x66.jpg"></a>
										</li>
					
										<li class="col-sm-3">
											<a class="thumbnail" id="carousel-selector-2"><img src="img/proj/funaitees-66x66.jpg"></a>
										</li>
					
										<li class="col-sm-3">
											<a class="thumbnail" id="carousel-selector-3"><img src="img/proj/museelah-66x66.jpg"></a>
										</li>
									</ul>
							</div>
							<div class="widget">
								<h5 class="widgetheading">Contact Us</h5>
								<ul class="social-network">
										<li><a href="#" data-placement="top" ><i class="glyphicon glyphicon-earphone"></i></a>T. +965 22564296</li>
										<br><li><a href="#" data-placement="top" ><i class="fa fa-fax"></i></a>F. +965 22564269</li>
										<br><li><a href="#" data-placement="top" ><i class="glyphicon glyphicon-envelope"></i></a>P.O. Box: 20982 Safat, 13070 Kuwait</li>
										<br><li><a href="#" data-placement="top" ><i class="fa fa-envelope"></i></a>E. info@pmiq8.com</li>
										</ul>
							</div>
					
						</aside>
					</div>
				</div>
			</div>
		</section>
		@endsection