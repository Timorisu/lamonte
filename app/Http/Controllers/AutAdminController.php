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
    public function index()
    {
        return view('admin');
    }

    public function login(Request $request){
        $rules = [
            'username'                 => 'required|string',
            'password'              => 'required|string'
        ];
        $messages = [
            'username.required'        => 'username wajib diisi',
            'username.string'           => 'username tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $data = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];
        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('admin.index');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'username atau password salah');
            return redirect()->route('login');
        }
        // if(Auth::attempt(['username' => $request->username, 'password'=> $request->password])){
            // return redirect('/admin');
        // }
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('new-login');
    }
}
