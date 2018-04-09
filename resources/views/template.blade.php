<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Project Management International Systems</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/plugins/flexslider/flexslider.css')}}" rel="stylesheet" media="screen" />
	<link href="{{ asset('/css/cubeportfolio.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('/css/style.css')}}" rel="stylesheet" />
	<link id="t-colors" href="{{ asset('/skins/default.css')}}" rel="stylesheet" />

</head>
<body>
	<div id="wrapper">
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
								<a class="navbar-brand" href="/"><img src="{{ asset('img/logo.jpg')}}" alt="" width="753" height="60" /></a>
							</div>
						<div class="col-md-6">
							<br>
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search" title="Click to start searching"></span>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
                            @foreach($cat as $item)
			                @if($item->children->count() > 0)
							<li class="dropdown">
								<a href="{{ url($item->url) }}" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{$item->title}} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									@foreach($item->children as $submenu)
					<li><a href="{{ url($submenu->url) }}">{{$submenu->title}}</a></li>
					@endforeach
				</ul>
			</li>
							
							
					
				@else
				<li><a href="{{ url($item->url) }}">{{$item->title}}</a></li>
				@endif
				@endforeach
						</ul>
						<div class="navbar navbar-default navbar-right">
								<ul>
									<li><a href="{{ url('editmenu') }}">Edit Navbar</a></li>
								</ul>
								</div>
					</div>


					





				</div>

				




			</div>
		

		</header>

		@yield('content')

		<footer>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; PIMS - All Right Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<script src="{{ asset('/js/jquery.min.js')}}"></script>
	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
	<script src="{{ asset('/plugins/flexslider/flexslider.config.js')}}"></script>
	<script src="{{ asset('/js/jquery.appear.js')}}"></script>
	<script src="{{ asset('/js/classie.js')}}"></script>
	<script src="{{ asset('/js/uisearch.js')}}"></script>
	<script src="{{ asset('/js/jquery.cubeportfolio.min.js')}}"></script>
	<script src="{{ asset('/js/custom.js')}}"></script>
</body>
</html>
