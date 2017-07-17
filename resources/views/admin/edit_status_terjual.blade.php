@extends('admin.template')
@section('title')
Tambah Property
@endsection
@section('content')
<section class="content-header">
	<h1>
		Form edit property terjual
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Property terjual</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-danger">
				<div class="box-body">
					<div class="form-group col-sm-6">
						<label>Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{$p->judul}}" placeholder="Contoh : Tanah Luas 100m2 kedamean" readonly="">
					</div>
					<div class="form-group col-sm-6">
						<label>Deskripsi</label>
						<input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$p->deskripsi}}" placeholder="Contoh : Lokasi Strategis" readonly="">
					</div>
					<div class="form-group col-sm-6">
						<label>Jenis</label>
						<select class="form-control" name="jenis" id="jenis" value="{{old('jenis')}}" readonly="">
							<option value="{{$p->jenis->id}}">{{$p->jenis->nama}}</option>
						</select>
					</div>
					<div class="form-group col-sm-6">
						<label>Type</label>
						<select class="form-control" name="type" id="type" readonly="">
							<option value="{{$p->type->id}}">{{$p->type->nama}}</option>
						</select>
					</div>
					<div class="form-group col-sm-4">
						<label>Harga (Rp)</label>
						<input type="text" class="form-control" id="harga" name="harga" value="{{$p->harga}}" placeholder="Contoh : 100,000,000.00" readonly="">	
					</div>
					<div class="form-group col-sm-4">
						<label>Panjang(m)</label>
						<input type="text" class="form-control" id="panjang" name="panjang" value="{{$p->panjang}}" placeholder="Contoh : 100.20" readonly="">	
					</div>
					<div class="form-group col-sm-4">
						<label>Lebar(m)</label>
						<input type="text" class="form-control" id="lebar" name="lebar" value="{{$p->lebar}}" placeholder="Contoh : 50.50" readonly="">
					</div>
					<div class="form-group col-sm-12">
						<label>Foto(Max 3 foto)</label>
						<input type="file" class="form-control" id="foto" name="foto[]" multiple class="file-loading">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-warning">
			@php
			$tgl = "";
				if($p->statusProperty == null){
					$tgl = date('d-m-Y');
				}else{
					$tgl = date('d-m-Y', strtotime($p->statusProperty->tgl_jual));
				}
			@endphp
				{!! Form::open(["route"=>["submit.updateproperty", "id"=>$p->id], "onsubmit"=>"return confirm('Apa Anda Yakin Update Property?')"]) !!}
				<div class="box-body">
					<div class="form-group col-sm-12 has-error">
						<label>Tgl Terjual</label>
						<input type="text" class="form-control" id="tgl" name="tgl" value="{{$tgl}}">
					</div>
					<div class="form-group col-sm-6 has-error">
						<label>Status Terjual</label>
						<select class="form-control" name="status" id="status">
							@if ($p->statusProperty == null)
							<option value="0" selected="">Belum Terjual</option>
							<option value="1">Sudah Terjual</option>
							@else
							<option value="1" selected="">Sudah Terjual</option>
							<option value="0">Belum Terjual</option>
							@endif
						</select>
					</div>
					<div class="form-group col-sm-6 has-error">
						<label>Harga Jual(m)</label>
						@if ($p->statusProperty == null)
						<input type="text" class="form-control" id="jual" name="jual" value="0" placeholder="Contoh : 50.50">
						@else
						<input type="text" class="form-control" id="jual" name="jual" value="{{$p->statusProperty->harga}}" placeholder="Contoh : 50.50">
						@endif
						@if($errors->has('jual'))
						@foreach ($errors->get('jual') as $element)
						<span class="text-danger">{{$element}}</span>
						@endforeach
						@endif
					</div>
					<div class="form-group col-sm-12">
						<input type="submit" class="btn btn-danger col-sm-12" value="Update Data">
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
<link rel="stylesheet" href="{{ asset('/') }}admin1/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
<!-- Boostrap Datepicker -->
<script type="text/javascript" src="{{ asset('/') }}admin1/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#tgl').datepicker({
			format:"dd-mm-yyyy",
			autoclose:true,
			todayHighlight:'TRUE',
			todayBtn: 'linked'
		});
		$('#harga, #panjang, #lebar, #jual').autoNumeric();
		@if (Session::has('save'))
		@if (Session::get("save") == 1)
		alert("Berhasil Update");
		@else
		alert("Gagal Update");
		@endif
		@endif
	});
</script>
@endsection