@extends('admin.template')
@section('title')
	List Property
@endsection
@section('content')
<section class="content-header">
	<h1>
		List Property Untuk Edit/Delete
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">List Property</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-danger">
				<div class="box-body">
					<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Judul</th>
							<th class="text-center">Deskripsi</th>
							<th class="text-center">Harga(Rp)</th>
							<th class="text-center">Panjang(m)</th>
							<th class="text-center">lebar(m)</th>
							<th class="text-center">luas(m<sup>2</sup>)</th>
							<th class="text-center">Foto</th>
							<th class="text-center">Edit/Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($p as $key => $value)
							<tr>
								<td class="text-center">{{$key+1}}</td>
								<td class="text-left">{{$value->judul}}</td>
								<td class="text-left">{{$value->deskripsi}}</td>
								<td class="text-center">{{$value->harga}}</td>
								<td class="text-center">{{$value->panjang}}</td>
								<td class="text-center">{{$value->lebar}}</td>
								<td class="text-center">{{$value->panjang*$value->lebar}}</td>
								<td class="text-center">-</td>
								<td class="text-center">
								<button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></button>
								<button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
						@endforeach
					</tbody>
					</table>
				</div>
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

@endsection

@section('js')

@endsection