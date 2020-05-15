<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class DaftarController extends Controller
{
    
    public function index(){
        return view('auth.register');
    }

    public function store(){
        // dd(request());

        $data=request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'siswa',
            'password' => Hash::make($data['password']),
        ]);

    
        return redirect('/home');
    }
}
