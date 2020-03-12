<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

class DaftarSiswa extends Controller
{
    public function index(Request $request){
        $kelas = $request->kelas;
        if (empty($kelas)) {
            # code...
            $siswa = Siswa::all(); 
        } else {
            # code...
            $siswa = Siswa::where('kelas',$kelas)->get();
        }
        return view('daftarsiswa',['daftar'=>$siswa]);
    }
    // public function semua() {
    //     // $kerah = Kerah::all();
    //     $siswa = Siswa::all();
    //     return view('daftarsiswa', ['daftar'=>$siswa]);
    // }
    // public function kelas6a() {
    //     // $kerah = Kerah::all();
    //     $siswa = DB::table('siswas')->where('Kelas','6A')->get();
    //     return view('daftarsiswa', ['daftar'=>$siswa]);
    // }
    // public function kelas6b() {
    //     // $kerah = Kerah::all();
    //     $siswa = DB::table('siswas')->where('Kelas','6B')->get();
    //     return view('daftarsiswa', ['daftar'=>$siswa]);
    // }
    // public function kelas6c() {
    //     // $kerah = Kerah::all();
    //     $siswa = DB::table('siswas')->where('Kelas','6C')->get();
    //     return view('daftarsiswa', ['daftar'=>$siswa]);
    // }
    // public function kelas6d() {
    //     // $kerah = Kerah::all();
    //     $siswa = DB::table('siswas')->where('Kelas','6D')->get();
    //     return view('daftarsiswa', ['daftar'=>$siswa]);
    // }
    // public function pilihkelas($kelas, Request $request) {
    //     // $kerah = Kerah::all();
    //     $siswa = DB::table('siswas')->where('Kelas',$kelas)->get();
    //     return view('daftarsiswa', ['daftar'=>$siswa]);
    // }
}