<?php
namespace App\Services\Impl;
use App\Services\PropertyService;
use App\Property as p;
use App\PropertyImage as pi;
use App\StatusProperty as sp;
use DB;
use Auth;
/**
* 
*/
class PropertyServiceImpl implements PropertyService{

	
	public function add($request){
		$judul = $request['judul'];
		$slug = str_slug($judul, '-');
		$deskripsi = $request['deskripsi'];
		$harga = $request['harga'];
		$panjang = $request['panjang'];
		$lebar = $request['lebar'];
		$jenis = $request['jenis'];
		$type = $request['type'];
		$foto = $request['foto'];
		$latitude = $request['latitude'];
		$longitude = $request['longitude'];
		$prop = $request['propinsi'];
		$kab = $request['kabupaten'];
		$kec = $request['kecamatan'];
		$kel = $request['kelurahan'];

		$master = "";
		$detail = "";
		$destination = "uploads";
		$filename = array();
		foreach ($foto as $key => $value) {
			$name = uniqid().".".$value->getClientOriginalExtension();
			array_push($filename, $name);
			$value->move($destination, $name);
		}
		DB::beginTransaction();
		$p = new p();

		$p->judul = $judul;
		$p->slug = $slug;
		$p->deskripsi = $deskripsi;
		$p->harga = $harga;
		$p->panjang = $panjang;
		$p->lebar = $lebar;
		$p->user_id = Auth::user()->id;
		$p->jenis_id = $jenis;
		$p->type_id = $type;	
		$p->kelurahan_id = $kel;	
		$p->latitude = $latitude;	
		$p->longitude = $longitude;	
		$save = $p->save();
		if($save){
			$master.=1;
			for ($i=0; $i < count($filename); $i++) { 
				$pi = new pi();
				$pi->img_path = $filename[$i];
				$pi->property_id = $p->id;
				$detail_save = $pi->save();
				if($detail_save){
					$detail.=1;
				}else{
					$detail.=0;
				}
			}
		}else{
			$detail.=0;
		}

		if($master == 1 && strpos($detail, "0") !== 0){
			DB::commit();
			return 1;
		}else{
			echo "gagal";
			return 0;
		}
	}

	public function listAll(){
		$p = new p();
		$l = $p->with(['PropertyImage', 'jenis', 'type', 'statusProperty'])->get();
		return $l;
	}

	public function find($id){
		$p = new p();
		$hasil = $p->with(['propertyImage', 'jenis', 'type', 'statusProperty'])->where('id', $id)->first();
		return $hasil;
	}

	public function updateStatus(array $request){
		$sp = new sp();
		$status = $request['status'];
		$tgl = $request['tgl'];
		$jual = $request['jual'];
		$id = $request['id'];

		$find = $sp->select("id")->where('property_id', $id)->first();
		if($find != null){
			$update = $sp->find($find->id);
			// $update->jual = $status;
			$update->user_id = Auth::user()->id;
			$update->tgl_jual = date('Y-m-d', strtotime($tgl));
			$update->harga = $jual;
			$save = $update->save();
			return $save;
		}else{
			$user = Auth::user()->id;
			// $sp->jual = $status;
			$sp->user_id = Auth::user()->id;
			$sp->property_id = $id;
			$sp->tgl_jual = date('Y-m-d', strtotime($tgl));
			$sp->harga = $jual;
			$save = $sp->save();
			return $save;
		}
	}

	// public function propertyView()

	
}