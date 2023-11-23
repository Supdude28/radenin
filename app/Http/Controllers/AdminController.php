<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $din = new Pembayaran();
        $din = new Siswa();
        return view('admin.dashboard',['ui'=>$din->all()]);

        
    }

    public function loginadmin(){
        return view('admin.signin');
    }
    public function registrasiadmin(){
        return view('admin.signup');
    }
    public function cekloginadmin(Request $request){
        $m = new Petugas();
        // cek username dan password
        $m = $m->where('username',$request->input('username'))->where('password',$request->input('password'));

        if($m->exists()){
            session([
                'username'=> $request->input('username'),
                'password'=> $request->input('password')
            ]);
            return redirect('/adminspp');

        }
        
        return back();
    }
    public function kelas(Request $request){
        $din = new Kelas();
        return view('kelas.kelas',['api'=>$din->all()]);
    }
    public function pembayaran(Request $request){
        $din = new Pembayaran();
        return view('pembayaran.datapembayaran',['au'=>$din->all()]);
    }

    public function tambahi(Request $request){
        
        return view('pembayaran.tambahpem');
    }
    public function tambahsis(Request $request){
        
        return view('admin.tambahsis');
    }
    
    public function sppsiswa(){
        $din = new Spp();
        return view('admin.spp',['ai'=>$din->all()]);
    }
    public function datasiswa(Request $request){
        $p = new Spp  ();
        $din = new Siswa();
        return view("admin.datasiswa",['dataspp'=>$p->all(),'ai'=>$din->all()]);
    }

    public function tambahkelas(Request $request){
        return view('kelas.tambahkls');
    }
    public function tambahinkelas(Request $request){
        $k =new Kelas;
        $k->create([

            'nama_kelas'=>$request->input('nama_kelas'),
            'kompetensi_keahlian'=>$request->input('kompetensi_keahlian')
        ]);
        return view('kelas.tambahkls')->with('pesan','data berhasil ditambahkan');
    }
    public function tambahkan(Request $request){
        $k =new Siswa;
        $k->create([
            'nisn'=>$request->input('nisn'),
            'nis'=>$request->input('nis'),
            'nama'=>$request->input('nama'),
            'id_kelas'=>$request->input('id_kelas'),
            'alamat'=>$request->input('alamat'),
            'no_telp'=>$request->input('no_telp'),
            'id_spp'=>$request->input('id_spp')
            
        ]);
        return view("admin.tambahsis")->with('pesan','data berhasil ditambahkan');
    }

    public function petugass(Request $request){
        return view('petugas.tambahkls');
    }
    
}
