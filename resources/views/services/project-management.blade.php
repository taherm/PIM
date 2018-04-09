@extends('layouts.master')
@section('content')
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a></li>
							<li class="active">About</li>
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
											<h3><a href="#">Project Management	</a></h3>
										</div>
										<img src="{{ asset('img/services/project-management-icon.jpg')}}" alt="" class="img-responsive" />
									</div>
									<p>
											Pre-design management establishes organization procedures, goals of the building program and definition of scope. It also will produce the project base line budget and the project master schedule. During the effort, working capital requirements are identified for the planning, design and construction phases of the project.  A management plan is developed and technical input is provided to produce sensitivity analyses and graphics for modeling the construction budget, schedule and rate of return. Top architects and engineers are identified and a Terms of Reference and selection of jury, if required, are prepared.
									<p>
											With the tendency now towards Design Build and Build-Operate-Transfer (BOT) schemes of construction, there may be many partners and participants. Our firm has the experience and expertise to ensure that a smooth operating link is formed so as not to impede the progress of the project as can so often happen.	
										</p>
										<p>	<img src="img/proj/project-managment-concept.jpg" class="pull-right" alt="" />
										</p>
										<p>
												With the tendency now towards Design Build and Build-Operate-Transfer (BOT) schemes of construction, there may be many partners and participants. Our firm has the experience and expertise to ensure that a smooth operating link is formed so as not to impede the progress of the project as can so often happen.	
											</p>
											<b>Objective</b>
											<p>To deliver an operational project that meets expectations while providing an Owner with the targeted financial returns, in the shortest possible time.</p>
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