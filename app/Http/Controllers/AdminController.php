<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
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
        return view('admin.kelas');
    }
    public function pembayaran(Request $request){
        return view('admin.datapembayaran');
    }

    public function tambahi(Request $request){
        return view('admin.tambahpem');
    }
    
}
