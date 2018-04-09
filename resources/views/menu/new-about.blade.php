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
											<h3><a href="#">{{$ser->title}}</a></h3>
										</div>
										<img src="{{asset($ser->image)}}" alt="" />
										</div>
									<p>
									{{$ser->description}}
									</p>
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