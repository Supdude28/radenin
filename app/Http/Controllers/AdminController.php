<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
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
            return redirect('/dashboard');

        }
        
        return back();
    }
}
