@extends('front.template')
@section('title')
Property | {{$data->judul}}
@endsection
@section('content')
<section class="border-top">
	<div class="container-fluid">
		<div class="page-title mrgt5x mrgb6x clearfix">
			<h4 class="page-name">Detail Property</h4>
			<div class="tag-bar"> <a href="#"><span>{{$data->slug}}s</span></a> </div>
			<ul class="breadcrumb">
				<li><a href="{{ route('front.dashboard') }}">Home</a></li>
				<li class="active"><a href="#">{{$data->slug}}</a></li>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="property-single">
			<div class="col-md-6 no-padding col-sm-8 animated out" data-delay="0" data-animation="fadeInUp">
				<div class="property-single-img"> <img src="{{ asset('uploads') }}/{{$data->propertyImage[0]->img_path}}" class="img-responsive" alt="#" style="width: 100%; height: 500px;" />
					<div class="image-detail">
						<h5 class="place-name">{{$data->judul}}</h5>
						<div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
						<div class="place-price">
							@php
							$harga = $data->harga/1000000;
							@endphp
							<span>Rp {{$harga}} Juta</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-4 animated out" data-delay="0" data-animation="fadeInUp">
				<div class="property-heading property-info">
					<h4><span>{{$data->judul}}</span></h4>
					<p>
						{{$data->deskripsi}}
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="property-details mrgt4x">
			<div class="col-md-4 no-padding col-sm-12">
				<div class="property-features animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-heading">
						<h4><span>SPESIFIKASI</span></h4>
					</div>
					<ul class="description-content col-md-6 col-sm-6">
						<li>
							<span class="description-title">Panjang </span>
							<span class="title-detail">{{$data->panjang}}m</span>
						</li>
						<li>
							<span class="description-title">Lebar</span>
							<span class="title-detail">{{$data->lebar}}m</span>
						</li>
						<li>
							<span class="description-title">Luas </span>
							<span class="title-detail">{{$data->panjang*$data->lebar}}m<sup>2</sup></span>
						</li>
						<li>
							<span class="description-title">Hatga  </span>
							<span class="title-detail">{{$data->harga/1000000}} Juta</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="property-description animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-heading">
						<h4><span>LOKASI</span></h4>
					</div>
					<ul class="description-content col-md-6 col-sm-6">
						<li>
							<span class="description-title">Provinsi </span>
							<span class="title-detail">{{$data->kelurahan->kecamatan->kabupaten->provinsi->nama}}</span>
						</li>
						<li>
							<span class="description-title">Kabupaten</span>
							<span class="title-detail">{{$data->kelurahan->kecamatan->kabupaten->nama}}</span>
						</li>
						<li>
							<span class="description-title">Kecamatan </span>
							<span class="title-detail">{{$data->kelurahan->kecamatan->nama}}</span>
						</li>
						<li>
							<span class="description-title">Kelurahan </span>
							<span class="title-detail">{{$data->kelurahan->nama}}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="property-description animated out" data-delay="0" data-animation="fadeInUp">
					<div class="property-heading">
						<h4><span>AGENT</span></h4>
					</div>
					<ul class="description-content col-md-12 col-sm-12">
						<li style="display: inherit; margin-left: 30%; text-align: center">
							<b>Silakan Hubungi Agent dibawah ini untuk konfirmasi lebih lanjut</b><br>
							<hr>
							<img src="{{ asset('non-admin') }}/images/ahmad.jpg" style="width: 214px; height: 189px;">
							<hr>
							<i class="fa fa-user"></i><b>&nbsp;&nbsp;&nbsp;Ahmad Solehudin A.</b><br>
							<i class="fa fa-phone"></i> <b>&nbsp;&nbsp;&nbsp;0856-4502-0511</b>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="find-location mrgt7x animated out" data-delay="0" data-animation="fadeInUp">
			<div class="property-heading mrgb4x">
				<h4><span>FIND THE LOCATION</span></h4>
			</div>
			<div class="map">
				<div id="map-street"></div>
			</div>
		</div>
	</div>
</section>
<section>
	
	
</section>
<p>
	<a name="postcomment"></a>
</p>
<script src='https://www.google.com/recaptcha/api.js'></script>
<section>
	<div class="container-fluid">
		<div class="post-review mrgt6x animated out" data-delay="0" data-animation="fadeInUp">
			<div class="property-heading">
				<h4><span> REVIEW</span></h4>
			</div>
			<div class="col-md-12 no-padding">
				<div class="post-guide mrgt3x mrgb4x">
					@if (Session::has('email'))
					@if (Session::get('email') == 1)
					<div class="alert alert-success">
						<strong>Sukses!</strong> email berhasil dikirim
					</div>
					@else
					<div class="alert alert-danger">
						<strong>Gagal!</strong> email gagal dikirim
					</div>
					@endif
					@endif
				</div>
			</div>
			
			<div class="post-form clearfix">
				{!! Form::open(['route'=>'feedback', 'method'=>'post', 'id'=>'form-email']) !!}
				<div class="col-md-4 no-padding">
					<div class="form-group">
						<label>NAME</label>
						<input class="form-control" placeholder="enter a name" name="nama" value="{{old('nama')}}">
						@if ($errors->has('nama'))
						@foreach ($errors->get('nama') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group">
						<label>EMAIL</label>
						<input class="form-control" placeholder="enter a email" name="email" value="{{old('email')}}">
						@if ($errors->has('email'))
						@foreach ($errors->get('email') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group">
						<label>SUBJECT</label>
						<input class="form-control" placeholder="enter a subject" name="subject" value="{{old('subject')}}">
						@if ($errors->has('subject'))
						@foreach ($errors->get('subject') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label>MESSAGE</label>
						<textarea class="form-control" placeholder="type in a message" rows="11" name="message">
							{{old('message')}}
						</textarea>
						@if ($errors->has('message'))
						@foreach ($errors->get('message') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="col-sm-12 pull-right">
						<div class="g-recaptcha pull-right" data-sitekey="6LddSSkUAAAAAHCBf-0G0qP8W5USqbDcEUy0S_V8"></div>
						@if ($errors->has('g-recaptcha-response'))
					</div>
					<div class="col-sm-12 pull-right">
						@foreach ($errors->get('g-recaptcha-response') as $element)
						<span class="text-danger col-sm-12 text-right">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="col-sm-12 pull-right">
						<input type="submit" name="submit" class="send-msg pull-right" value="SEND MESSAGE">
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@endsection
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN2NSwCAvsZp2JnDzI-mX-s0RR-S3braQ&hl=id"></script> 
<script type="text/javascript">
	jQuery(document).ready(function($) {
			// alert("{{$data->latitude}}");
			try{
		//google-map
		if( $('#map-street').length ) {    
			var locations = [
			['<div class="infobox">{{strtoupper($data->judul)}}<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>', {{$data->latitude}},{{$data->longitude}}, 1],
			];

			var map = new google.maps.Map(document.getElementById('map-street'), {
				zoom: 15,
				scrollwheel: true,
				navigationControl: true,
				mapTypeControl: true,
				scaleControl: true,
				draggable: false,

				center: new google.maps.LatLng({{$data->latitude}},{{$data->longitude}}),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var infowindow = new google.maps.InfoWindow();

			var marker, i;

			for (i = 0; i < locations.length; i++) {  

				marker = new google.maps.Marker({ 
					position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
					map: map ,
					icon: '{{ asset('non-admin') }}/images/marker.png'
				});

				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						infowindow.setContent(locations[i][0]);
						infowindow.open(map, marker);
					}
				})(marker, i));
			}
		}
	} catch(e) {
		console.log( 'google map error' );
	}
});
</script>
@endsection
