
@extends('layouts.master')
@section('content')
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Services</li>
							<a class="btn btn-default" href="services/create" role="button">CREATE</a>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Recent Works</h4>
						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
									@foreach($ser as $s)
								<li class="cbp-item graphic">
									<div class="cbp-caption">
											
										<div class="cbp-caption-defaultWrap">
											
												<a href="{{ url('services/'.$s->id) }}"><img src="{{$s->image}}" alt="" /></a>
										</div>
									</div>
									
									<div class="cbp-l-grid-projects-title">{{$s->title}}</div>
									<div class='col-md-12'>
									<div class="col-md-6">
										<a class="btn btn-default" href="{{ url('services/'.$s->id.'/edit') }}" role="button">Edit</a>
									</div>
									<div class="col-md-6">	
									<form method="POST" action="/services/{{$s->id}}">
										{{ csrf_field() }}
										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-default" type="submit">Delete</button>
									</form>
								</div>
								</div>
									@endforeach
								</li>
							</ul>
							</div>						
					</div>
				</div>
			</div>
		</section>

	
		@endsection
