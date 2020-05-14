<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function datasiswa(Request $request){
        return view('pendaftaran.datasiswa');
    }
    
    public function dataortu(Request $request){
        return view('pendaftaran.dataortu');
    }

    public function datasekolah(Request $request){
        return view('pendaftaran.datasekolah');
    }
    
    public function nilaiusbn(Request $request){
        return view('pendaftaran.nilaiusbn');
    }
    
    public function nilaiunbk(Request $request){
        return view('pendaftaran.nilaiunbk');
    }
}
