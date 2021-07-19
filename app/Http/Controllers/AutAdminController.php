<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use app\AutentikasiAdmin;

class AutAdminController extends Controller
{
    public function login(Request $request){

        $validatedData = $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);


        // var_dump($credentials);die;
        $data = ['name'=> $request->name,'password'=>$request->password];
        $auth = Auth::attempt(['name'=> $request->name,'password' => $request->password]);

        if ($auth) {
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('login')->with(['error' => 'Username atau Password salah!']);
        }
        
        //$has = Hash::make($request->password);
        //var_dump($has);die;
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('new-login');
    }
}
