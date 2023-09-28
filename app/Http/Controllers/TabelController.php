<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\TabelPertama; // Ganti dengan model TabelPertama yang sesuai
use App\Models\TabelKedua; 
use Illuminate\Support\Facades\DB;// Ganti dengan model TabelKedua yang sesuai

class TabelController extends Controller
{
    public function index()
    {
        // Ambil data dari Tabel Pertama
        $dataTabelPertama = TabelPertama::all();

        return view('index', ['dataTabelPertama' => $dataTabelPertama]);
    }

    public function showTabelKedua($kode)
    {
        // Ambil data dari Tabel Kedua berdasarkan kode
        //$dataTabelKedua = TabelKedua::find($kode);

        $dataTabelKedua = DB::table('data1')
        ->where('kode', $kode)
        ->select('nama','kode')
    
        ->get();
        return view('detail',compact('dataTabelKedua'));

        // Mengambil data Tabel Kedua yang terkait dengan Tabel Pertama
       

      
    }
}
