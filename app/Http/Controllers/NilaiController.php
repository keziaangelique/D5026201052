<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
    	//mengembalikan array of object [][]
        //DB::table('')->get()

        // mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);
    	// mengirim data nilaikuliah ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]); //passing value bisa lebih dari 1

    }

    public function tambah()
    {

	    // memanggil view tambah
	return view('nilaikuliah.tambah');

    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
	// insert data ke table nilaikuliah
	DB::table('nilaikuliah')->insert([
		'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
	    'SKS' => $request->SKS,
	]);
	// alihkan halaman ke halaman nilaikuliah
	return redirect('/nilaikuliah');

    }

}
