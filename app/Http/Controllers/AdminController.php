<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Type;
use App\Http\Requests\InputProperty as ip;
use App\Services\PropertyService as psi;
use App\Http\Requests\InsertStatusProperty as isp;
use Input;
use App\Provinsi as provinsi;
use App\Kabupaten as kabupaten;
use App\Kecamatan as kecamatan;
use App\Kelurahan as kelurahan;
use Auth;

class AdminController extends Controller
{
    private $psi;
    private $provinsi;
    private $kabupaten;
    private $kecamatan;
    private $kelurahan;
    
    function __construct(psi $psi, provinsi $provinsi, kabupaten $kabupaten, kecamatan $kecamatan, kelurahan $kelurahan)
    {
        $this->psi = $psi;
        $this->provinsi = $provinsi;
        $this->kabupaten = $kabupaten;
        $this->kecamatan = $kecamatan;
        $this->kelurahan = $kelurahan;
    }

    public function TambahProperty(){
        $jenis = new Jenis();
        $j = $jenis->all();
        $type = new Type();
        $t = $type->all();
        $prop = $this->provinsi->where('id', 35)->first();
        $kab = $this->kabupaten->where('provinsi_id', $prop->id)->where('nama', 'like', '%GRESIK%')->first();
        $kec = $this->kecamatan->where('kabupaten_id', $kab->id)->orderBy('nama', 'asc')->get();
        $kel = $this->kelurahan->where('kecamatan_id', $kec[0]->id)->orderBy('nama', 'asc')->get();
        return view('admin.tambah_property', compact('t', 'j', 'prop', 'kab', 'kec', 'kel'));
    }

    public function EditProperty(){
        $p = $this->psi->listAll();
        return view("admin.edit_property", compact('p'));
    }

    public function PropertyTerjual(){
        $p = $this->psi->listAll();
        return view("admin.status_property", compact('p'));
    }

    public function SubmitProperty(ip $request){
        $judul =  $request->input("judul");
        $deskripsi = $request->input("deskripsi");
        $harga = str_replace(',', '', $request->input("harga"));
        $panjang = str_replace(',', '', $request->input("panjang"));
        $lebar = str_replace(',', '', $request->input("lebar"));
        $jenis = $request->input("jenis");
        $type = $request->input("type");
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $foto = $request->file('foto');

        $propinsi = $request->input('prop');
        $kabupaten = $request->input('kab');
        $kecamatan = $request->input('kec');
        $kelurahan = $request->input('kel');
        $r = array(
            "judul"=>$judul,
            "deskripsi"=>$deskripsi,
            "harga"=>$harga,
            "panjang"=>$panjang,
            "lebar"=>$lebar,
            "jenis"=>$jenis,
            "type"=>$type,
            "foto"=>$foto,
            "propinsi"=>$propinsi,
            "kabupaten"=>$kabupaten,
            "kecamatan"=>$kecamatan,
            "kelurahan"=>$kelurahan,
            "latitude"=>$latitude,
            "longitude"=>$longitude
            );
        $save = $this->psi->add($r);
        return redirect()->back()->with(["save"=>$save]);
    }

    public function DetailPropertyTerjual($id){
        $p = $this->psi->find($id);
        echo $p->status_property;
        return view("admin.edit_status_terjual", compact('p'));
    }

    public function updateTerjual(isp $request, $id){
        $tgl = $request->input("tgl");
        $status = $request->input("status");
        $jual = str_replace(",", "", $request->input("jual"));
        $r = array(
            "tgl"=>$tgl,
            "status"=>$status,
            "jual"=>$jual,
            "id" => $id
        );
        $save = $this->psi->updateStatus($r);
        return redirect()->back()->with(["save"=>$save]);
    }

    public function getKelurahan(Request $request){
        $kecamatan = $request->input('kecamatan');
        $response = $this->kelurahan->where('kecamatan_id', $kecamatan)->orderBy('nama', 'asc')->get();
        return response()->json($response);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

}
