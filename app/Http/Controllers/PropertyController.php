<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;
use App\Kelurahan;
use App\Http\Requests\FeedbackSubmitRequest as fsr;
use Mail;
use App\Mail\TestMail;
use Validator;
use URL;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p = new Property();
        $data =  $p->with(['propertyImage', 'type', 'jenis', 'statusProperty', 'kelurahan', 'kelurahan.kecamatan', 'kelurahan.kecamatan.kabupaten', 'kelurahan.kecamatan.kabupaten.provinsi'])->whereHas('propertyImage')->paginate(8);
        return view('front.property', compact('data'));
    }

    public function detailProperty($id){
        $p = new Property();
        $data = $p->with(['propertyImage', 'type', 'jenis', 'statusProperty', 'kelurahan', 'kelurahan.kecamatan', 'kelurahan.kecamatan.kabupaten', 'kelurahan.kecamatan.kabupaten.provinsi'])->where('slug', $id)->first();
        if($data==null){
            return redirect()->route('notfound')->with('page', 'front');
        }else{
            return view("front.detail_property", compact('data'));
        }
    }

    public function test(){
        $prop = new Provinsi();
        $kab = new Kabupaten();
        $kec = new Kecamatan();
        $kel = new Kelurahan();

        $a = $prop->with([
            'kabupaten'=>function($query){
                return $query->with([
                    'kecamatan'=>function($query){
                        return $query->with([
                            'kelurahan'=>function($query){
                                return $query;
                            }
                            ]);
                    }
                    ]);
            }
            ])->where('id', 35)->get();
        echo "$a";
    }

    public function feedback(Request $request){
        $nama = $request->input("nama");
        $email = $request->input("email");
        $subject = $request->input("subject");
        $message = $request->input("message");

        $validator = Validator::make($request->all(), [
            'nama'=>'required',
            'email'=>'required|email',
            "subject"=>'required',
            'message'=>'required',
            'g-recaptcha-response'=>'required'
            ],[
            'nama.required'=> "nama harus diisi",
            'email.required'=> "email harus diisi",
            'email.required'=> "email harus valid",
            'subject.required'=> "subject harus diisi",
            'message.required'=> "message harus diisi",
            'g-recaptcha-response.required'=>"recapcha harus di centang"
            ]);

        if($validator->fails()){
         return redirect(URL::previous()."#postcomment")->withInput()->withErrors($validator);
     }else{
        $content = array(
            "nama"=>$nama,
            "email"=>$email,
            "subject"=>$subject,
            "message"=>$message,
            );
        $receiver = 'mikohendroc@gmail.com';

        Mail::to($receiver)->send(new TestMail($content));
        if(count(Mail::failures()) > 0){
            return redirect(URL::previous()."#postcomment")->with(["email"=>0]);
        }else{
            return redirect(URL::previous()."#postcomment")->with(["email"=>1]);
        }
    }
}
}
