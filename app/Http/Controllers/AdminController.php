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
        $din = new Siswa();
        return view('admin.dashboard',['ai'=>$din->all()]);

        
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
        $si  = new Siswa();
        $man = new kelas();
        $mak = new spp();
        return view('admin.tambahsis',['dataspp'=>$mak->all(),'data'=>$man->all(),'si'=>$si->all()]);
    }
    
    public function sppsiswa(){
        $din = new Spp();
        return view('spp.spp',['ai'=>$din->all()]);
    }
    public function tambahspp(Request $request){
        return view('spp.spptambah');
    }
    public function tambahispp(Request $request){
        $uk = new Spp();
        $uk ->create([
            'id_spp'=>$request->input('id_spp'),
            'tahun'=>$request->input('tahun'),
            'nominal'=>$request->input('nominal')
        ]);
        return view('spp.spptambah')->with('pesan','data berhasil di tambahkan');
    }
    public function datasiswa(Request $request){
        $kk = new Kelas();
        $p = new Spp  ();
        $din = new Siswa();
        return view("admin.datasiswa",['dataspp'=>$p->all(),'ai'=>$din->all(),'kk'=>$kk->all()]);
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

         $r = $request->validate([
            
         ]);
        $k =new Siswa;
        $k->create($request->all());
        return view("admin.tambahsis")->with('pesan','data berhasil ditambahkan');
    }

    public function petugass(Request $request){
        return view('petugas.tambahkls');
    }
    
}
