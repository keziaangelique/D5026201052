<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MutasiController extends Controller
{
    public function indexmutasi()
    {
    	//mengembalikan array of object [][]
        //DB::table('')->get()

        // mengambil data dari table mutasi
    // $mutasi = DB::table('mutasi')->get();

    // 	// mengirim data pegawai mutasi ke view indexmutasi
    // 	return view('mutasi.indexmutasi',['mutasi' => $mutasi]); //passing value bisa lebih dari 1

        $mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.idpegawai', '=', 'pegawai.pegawai_id')
        ->select('mutasi.*', 'pegawai.pegawai_nama')
        ->paginate(5);

        return view('mutasi.indexmutasi',['mutasi' => $mutasi]);

    }

    public function add()
    {

	    // memanggil view add
	return view('mutasi.add');

    }

    // method untuk insert data ke table pegawai
    public function save(Request $request)
    {
	// insert data ke table mutasi
	DB::table('mutasi')->insert([
		//
		'idpegawai' => $request->idpegawai,
		'departemen' => $request->departemen,
		'subdepartemen' => $request->subdepartemen,
        'mulaibertugas' => $request->mulaibertugas
	]);
	// alihkan halaman ke halaman mutasi
	return redirect('/mutasi');

    }

    // method untuk edit data mutasi
    public function ubah($id)
    {
	// mengambil data mutasi berdasarkan id yang dipilih
	$mutasi = DB::table('mutasi')->where('id',$id)->get();
	// passing data mutasi yang didapat ke view ubah.blade.php
	return view('mutasi.ubah',['mutasi' => $mutasi]);

    }

    //view data mutasi
    public function view($id)
    {
	// mengambil data mutasi berdasarkan id yang dipilih
	$mutasi = DB::table('mutasi')->where('id',$id)->get();
	// passing data mutasi yang didapat ke view edit.blade.php
	return view('mutasi.detail',['mutasi' => $mutasi]);

    }

    // update data mutasi
    public function unggah(Request $request)
    {
	// update data mutasi
	DB::table('mutasi')->where('id',$request->id)->update([
		'idpegawai' => $request->idpegawai,
		'departemen' => $request->departemen,
		'subdepartemen' => $request->subdepartemen,
        'mulaibertugas' => $request->mulaibertugas
	]);
	// alihkan halaman ke halaman mutasi
	return redirect('/mutasi');
    }

    // method untuk hapus data mutasi
    public function clear($id)
    {
	// menghapus data mutasi berdasarkan id yang dipilih
	DB::table('mutasi')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/mutasi');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.idpegawai', '=', 'pegawai.pegawai_id')
		->where('pegawai_nama','like',"%".$cari."%")
        ->orWhere('departemen','like',"%".$cari."%")
        ->orWhere('subdepartemen','like',"%".$cari."%")
		->paginate();

    	// mengirim data mutasi ke view index
		return view('mutasi.indexmutasi',['mutasi' => $mutasi]);

	}
}
