@extends('layouts.master')
@section('content')







<section id="featured" class="bg">
<div class="c-layout-revo-slider-desktop c-layout-revo-slider-4" dir="ltr">
    <div class="tp-banner-container c-theme">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>
                @foreach($slider as $slide)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                        <img src="{{$slide->image }}"
                                data-bgposition="center center"
                                data-bgfit="cover"
                                data-bgrepeat="no-repeat"
                        >
                        
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


</section>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<p>Our Mission is to provide the highest quality program, project and construction management services to both public and private sector clients to help them achieve the goals of their construction program in an ethical, creative and cost efficient manner.</p>
	
				</div>
			</div>
		</div>
	</div>

	<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Our Services</h4>
				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="projectmg.html"><img src="img/services/project-management-icon.jpg" alt="" /></a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">PROJECT MANAGEMENT</div>
						</li>
						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="pdmgt.html"><img src="img/services/pre-design-managment-icon.jpg" alt="" /></a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">PRE-DESIGN MANAGEMENT</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="desmgt.html">	<img src="img/services/design-managment-icon.jpg" alt="" /> </a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">DESIGN MANAGEMENT</div>
						</li>
						<li class="cbp-item web-design graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="valeng.html"><img src="img/services/value-engineering-icon.jpg" alt="" /></a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">VALUE ENGINEERING</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="consmgt.html"><img src="img/services/construction-managment-icon.jpg" alt="" /></a>
								</div>
								</div>
							<div class="cbp-l-grid-projects-title">CONSTRUCTION MANAGEMENT</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="projectcont.html"><img src="img/services/project-control-system-icon.jpg" alt="" /></a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">PROJECT CONTROL SYSTEMS</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="claimmgt.html"><img src="img/services/claims-management-icon.jpg" alt="" /></a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">CLAIMS MANAGEMENT</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<a href="riskmgt.html"><img src="img/services/risk-management-icon.jpg" alt="" /></a>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">RISK MANAGEMENT</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
			<h4 class="heading">Our Clients</h4>
			
		<div class="row">
			<div class="col-xs-6 col-md-2 aligncenter client">
				<img alt="logo" src="img/clients/ALSAYER.jpg" class="img-responsive" />
			</div>

			<div class="col-xs-6 col-md-2 aligncenter client">
				<img alt="logo" src="img/clients/mercedes-benz-logo-design.jpg" class="img-responsive" />
			</div>

			<div class="col-xs-6 col-md-2 aligncenter client">
				<img alt="logo" src="img/clients/VIVA.jpg" class="img-responsive" />
			</div>

			<div class="col-xs-6 col-md-2 aligncenter client">
				<img alt="logo" src="img/clients/kw.jpg" class="img-responsive" />
			</div>

			<div class="col-xs-6 col-md-2 aligncenter client">
				<img alt="logo" src="img/clients/kazi.jpg" class="img-responsive" />
			</div>
			<div class="col-xs-6 col-md-2 aligncenter client">
				<img alt="logo" src="img/clients/sandook.jpg" class="img-responsive" />
			</div>
		</div>
	</div>
</section>

	
		@endsection