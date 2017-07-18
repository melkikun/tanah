@extends('front.template')
@section('title')
Property |Home
@endsection
@section('content')
<section class="border-top">
	<div class="container-fluid">
		<div class="page-title mrgt5x mrgb6x clearfix">
			<h4 class="page-name">Home Page</h4>
			<div class="tag-bar"> <a href="#"><span>Halaman Utama</span></a> </div>
			@php
				echo sha1("miko");
			@endphp
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="property-filter clearfix">
			<div class="row">
				<ul class="filter-list">
					@foreach ($data as $element)
					<li class="mix sale col-md-3 col-sm-4 mrgb5x" style="cursor: pointer;" onclick="location.href='{{ route('front.detail', $element->slug) }}'">
						<div class="property-box sale-2 animated out" data-delay="0" data-animation="fadeInUp">
							<div class="appartment-img">
								<img src="{{ asset('uploads') }}/{{$element->propertyImage[0]->img_path}}" class="img-responsive" alt="#" style="width: 100%; height: 300px;" />
								<div class="room-price">
									@php
									$harga = $element->harga/1000000;
									@endphp
									<span>Rp {{$harga}} Juta</span>
								</div>
								<div class="like-btn"><a href="#"><i class="fa fa-heart"></i></a></div>
							</div>
							<div class="property-text clearfix">
								<div class="resort-name">
									<h4>{{$element->judul}}</h4>
									<p>{{$element->deskripsi}} </p>
								</div>
								<div class="detail-btn mrgt3x"> 
									<a href="{{ route('front.detail', $element->slug) }}" class="sale">
										DIJUAL
									</a> 
								</div>
								<div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
							</div>
							<ul class="home2 appartment-detail">
								<li>Panjang : {{$element->panjang}}m</li>
								<li>Lebar : {{$element->lebar}}m</li>
							</ul>
							<ul class="home2 appartment-detail">
								<li>Luas : {{$element->panjang*$element->lebar}}m<sup>2</sup></li>
							</ul>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="numbering mrgb6x">
			{{$data->render()}}
			{{-- <hr/> --}}
			{{-- {{$data->lastPage()}} --}}
			{{-- <ul class="pagination">
				<li style="cursor: pointer;"><a><i class="fa fa-angle-double-left"></i></a></li>
				@for ($i = 1; $i <= $data->lastPage(); $i++)
				@if ($i == $data->currentPage())
				<li class="active"><a href="{{ url("/?page=$i") }}">{{sprintf("%02d", $i)}}</a></li>
				@else
				<li><a href="{{ url("/?page=$i") }}">{{sprintf("%02d", $i)}}</a></li>
				@endif
				@endfor
				<li style="cursor: pointer;"><a><i class="fa fa-angle-double-right"></i></a></li>
			</ul> --}}
		</div>
	</div>
</section>
@endsection
