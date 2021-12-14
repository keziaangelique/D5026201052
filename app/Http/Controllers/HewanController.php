<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HewanController extends Controller
{
    public function index()
    {
    	//mengembalikan array of object [][]
        //DB::table('')->get()

        // mengambil data dari table hewan
    	//$hewan = DB::table('hewan')->get();
        $hewan = DB::table('hewan')->paginate(5);
    	// mengirim data hewan ke view index
    	return view('hewan.index',['hewan' => $hewan]); //passing value bisa lebih dari 1

    }

    public function tambah()
    {

	    // memanggil view tambah
	return view('hewan.tambah');

    }

    // method untuk insert data ke table hewan
    public function store(Request $request)
    {
	// insert data ke table hewan

	DB::table('hewan')->insert([
		// 'kodehewan' => $request->kodehewan,
		'namahewan' => $request->namahewan,
		'jumlahhewan' => $request->jumlahhewan,
	    'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman hewan
	return redirect('/hewan');

    }

    // method untuk edit data hewan
    public function edit($id)
    {
         // mengambil data hewan berdasarkan id yang dipilih
        $hewan = DB::table('hewan')->where('kodehewan', $id)->get();
         // passing data hewan yang didapat ke view edit.blade.php
        return view('hewan.edit', ['hewan' => $hewan]);
    }

    //view data hewan
    public function view($id)
    {
	// mengambil data hewan berdasarkan id yang dipilih
	$hewan = DB::table('hewan')->where('kodehewan',$id)->get();
	// passing data hewan yang didapat ke view detail.blade.php
	return view('hewan.detail',['hewan' => $hewan]);

    }

    // update data hewan
    public function save(Request $request)
    {
	// update data hewan
	DB::table('hewan')->where('kodehewan',$request->kodehewan)->update([
		'namahewan' => $request->namahewan,
		'jumlahhewan' => $request->jumlahhewan,
	    'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman hewan
	return redirect('/hewan');
    }


    public function delete($id)
    {
	// menghapus data hewan berdasarkan id yang dipilih
	DB::table('hewan')->where('kodehewan',$id)->delete();

	// alihkan halaman ke halaman hewan
	return redirect('/hewan');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$hewan = DB::table('hewan')
		->where('namahewan','like',"%".$cari."%")
		->paginate();

    	// mengirim data hewan ke view index
		return view('hewan.index',['hewan' => $hewan]);

	}
}
