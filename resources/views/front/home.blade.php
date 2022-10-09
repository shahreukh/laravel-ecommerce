@extends('front.layout.layout')

@section('slider')

<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<div class="container">
					<a href="#">
						<img style="width:100%" src="{{ asset('themes/images/carousel/1.png')}}" alt="special offers"/>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img style="width:100%" src="{{ asset('themes/images/carousel/2.png')}}" alt=""/></a>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#">
						<img src="{{ asset('themes/images/carousel/3.png')}}" alt=""/>
					</a>		
				</div>
			</div>
		</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div> 
</div>

@endsection

@section('content')

<div class="span9">		
	<div class="well well-small">
		<h4>Featured Products</h4>
		<div class="row-fluid">
			<div id="featured" class="carousel slide">
				<div class="carousel-inner">
				@php $i=0; @endphp
				@foreach($products->chunk(4) as $product)
					<div class="item @if($i==0) active @endif">
				@php $i=1; @endphp
						<ul class="thumbnails">
				@foreach($product as $value)
							<li class="span3">
								<div class="thumbnail">
									<i class="tag"></i>
										<a href="{{ route('productView', $value->id)}}">
											<img src="{{ asset('uploads/'.$value->image)}}" alt="">
										</a>
										<div class="caption">
											<h5>{{$value->name}}</h5>
											<h4><a class="btn" href="{{ route('productView', $value->id)}}">VIEW</a>
												<span class="pull-right">$ {{$value->price}}</span>
											</h4>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
							</div>
							@endforeach
							</div>
								<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
								<a class="right carousel-control" href="#featured" data-slide="next">›</a>
							</div>
						</div>
					</div>
					<h4>Latest Products</h4>
					<ul class="thumbnails">
					@foreach($new_products as $new_product)
						<li class="span3">
							<div class="thumbnail">
								<a href="{{'productView'}}">
									<img src="{{ asset('uploads/'.$new_product->image)}}" alt=""/>
								</a>
							<div class="caption">
								<h5>{{$new_product->name}}</h5>
								<h4 style="text-align:center">
									<a class="btn" href="{{$new_product->name}}"> <i class="icon-zoom-in"></i></a> 
									<a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> 
									<a class="btn btn-primary" href="#">$ {{$new_product->price}}</a>
								</h4>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>

@endsection