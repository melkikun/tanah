@extends('admin.template')
@section('title')
Status Property
@endsection
@section('content')
<section class="content-header">
	<h1>
		Status Property 
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
								<th class="text-center">Harga(Rp)</th>
								<th class="text-center">Panjang(m)</th>
								<th class="text-center">lebar(m)</th>
								<th class="text-center">luas(m<sup>2</sup>)</th>
								<th class="text-center">Status</th>
								<th class="text-center">Edit</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($p as $key => $value)
							<tr>
								<td class="text-center">{{$key+1}}</td>
								<td class="text-left">{{$value->judul}}</td>
								<td class="text-center">Rp {{number_format($value->harga,2)}}</td>
								<td class="text-center">{{number_format($value->panjang,2)}}</td>
								<td class="text-center">{{number_format($value->lebar,2)}}</td>
								<td class="text-center">{{number_format($value->panjang*$value->lebar,2)}}</td>
								<td class="text-center">
								@if ($value->statusProperty == null || $value->statusProperty->isactive == 0)
									<span class="text-primary">Belum Terjual</span>
								@else
									<span class="text-danger">Sudah Terjual</span>
								@endif
									&nbsp;&nbsp;
									<sup>
										<i class="fa fa-info text-success"></i>
									</sup>
								</td>
								<td class="text-center">
									<a href="{{ route('admin.detailterjual', ['id'=>$value->id]) }}"  class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
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