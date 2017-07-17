@extends('admin.template')
@section('title')
	Tambah Property
@endsection
@section('content')
<section class="content-header">
	<h1>
		Form Penambahan Property Baru
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Tambah Property</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-danger">
				{!! Form::open(["route"=>"admin.submitproperty", "files"=>true, "onsubmit"=>"return confirm('Apa anda yakin ingin memasukkan property tersebut ke database?')"]) !!}
				<div class="box-body">
					<div class="form-group col-sm-12">
						<label>Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}" placeholder="Contoh : Tanah Luas 100m2 kedamean">
						@if ($errors->has('judul'))
						@foreach ($errors->get('judul') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-12">
						<label>Deskripsi</label>
						<textarea id="deskripsi" name="deskripsi" placeholder="COntoh : Lokasi Jalan XXX Nomer 14 Dekat Sungai Bengawan Solo" class="form-control"></textarea>
						@if ($errors->has('deskripsi'))
						@foreach ($errors->get('deskripsi') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-6">
						<label>Jenis</label>
						<select class="form-control" name="jenis" id="jenis">
							@foreach ($j as $element)
							<option value="{{$element->id}}">{{$element->nama}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label>Type</label>
						<select class="form-control" name="type" id="type">
							@foreach ($t as $element)
							<option value="{{$element->id}}">{{$element->nama}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-sm-4">
						<label>Harga (Rp)</label>
						<input type="text" class="form-control" id="harga" name="harga" value="{{old('harga')}}" placeholder="Contoh : 100,000,000.00">
						@if ($errors->has('harga'))
						@foreach ($errors->get('harga') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-4">
						<label>Panjang(m)</label>
						<input type="text" class="form-control" id="panjang" name="panjang" value="{{old('panjang')}}" placeholder="Contoh : 100.20">
						@if ($errors->has('panjang'))
						@foreach ($errors->get('panjang') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-4">
						<label>Lebar(m)</label>
						<input type="text" class="form-control" id="lebar" name="lebar" value="{{old('lebar')}}" placeholder="Contoh : 50.50">
						@if ($errors->has('lebar'))
						@foreach ($errors->get('lebar') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-6">
						<label>Latitude</label>
						<input type="text" class="form-control" id="latitude" name="latitude" value="{{old('latitude')}}" placeholder="Contoh : 6.2011111">
					</div>
					<div class="form-group col-sm-6">
						<label>Longitude</label>
						<input type="text" class="form-control" id="longitude" name="longitude" value="{{old('longitude')}}" placeholder="Contoh : 100.201111">
					</div>
					<div class="form-group col-sm-3">
						<label>Propinsi</label>
						<select class="form-control" name="prop" id="prop">
							<option value="{{$prop->id}}">{{$prop->nama}}</option>
						</select>
					</div>
					<div class="form-group col-sm-3">
						<label>Kabupaten</label>
						<select class="form-control" name="kab" id="kab">
							<option value="{{$kab->id}}">{{$kab->nama}}</option>
						</select>
					</div>
					<div class="form-group col-sm-3">
						<label>Kecamatan</label>
						<select class="form-control" name="kec" id="kec" onchange="rubahKecamatan();">
							@foreach ($kec as $element)
							<option value="{{$element->id}}">{{$element->nama}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-sm-3">
						<label>Kelurahan</label>
						<select class="form-control" name="kel" id="kel">
							@foreach ($kel as $element)
							<option value="{{$element->id}}">{{$element->nama}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-sm-12">
						<label>Foto(Max 3 foto)</label>
						<input type="file" class="form-control" id="foto" name="foto[]" multiple class="file-loading">
						@if ($errors->has('foto'))
						@foreach ($errors->get('foto') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-12">
						<input type="submit" class="btn btn-danger col-sm-12" value="Submit Data">
					</div>
				</div>
				{!! Form::close() !!}
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
@endsection

@section('css')
<!-- Bootstrap file input -->
<link rel="stylesheet" href="{{ asset('/') }}admin1/plugins/bootstrap-fileinput-master/css/fileinput.min.css">
<style type="text/css">
	body{
		background-color: red !important;
	}
	.kv-file-upload.btn.btn-xs.btn-default{
		display:none !important;
	}
	.file-upload-indicator{
		display:none !important;
	}
</style>
@endsection

@section('js')
<!-- Boostrap File Input -->
<script src="{{ asset('/') }}admin1/plugins/bootstrap-fileinput-master/js/fileinput.min.js"></script>
<!-- AutoNumeric -->
<script src="{{ asset('/') }}admin1/plugins/autoNumeric/dist/autoNumeric.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#foto').fileinput({
			showRemove: false,
			showUpload: false,
			uploadUrl: "#",
			maxFileCount: 3,
			allowedFileExtensions: ["jpg", "png", "gif"],
			showPreview: true,
			initialPreviewCount: true,
			validateInitialCount: true,
		});
		$('#panjang, #lebar, #harga').autoNumeric();
		@if (Session::has("save"))
		@if (Session::get('save') == 1)
		alert("Berhasil Insert Data");
		@else
		alert("Gagal Insert Data");
		@endif
		@endif
	});
	function submit(){
		var cf = confirm("Apa anda yakin memasukkan property ini?");
		if(cf == true){
			return true;
		}else{
			return false;
		}
	}

	function rubahKecamatan(){
		var kecamatan = $('#kec').val();
		jQuery.ajax({
		  url: '{{ route('get.kelurahan') }}',
		  type: 'get',
		  dataType: 'json',
		  data: {kecamatan: kecamatan},
		  beforeSend:function(xhr){
		  	$('#kel').empty();
		  },
		  complete: function(xhr, textStatus) {
		    //called when complete
		  },
		  success: function(response, textStatus, xhr) {
		  	var option = "";
		    $.each(response, function(index, val) {
		    	option += "<option value='"+val.id+"'>"+val.nama+"</option>";
		    });
		    $('#kel').append(option);
		  },
		  error: function(xhr, textStatus, errorThrown) {
		    //called when there is an error
		  }
		});
		
	}
</script>
@endsection