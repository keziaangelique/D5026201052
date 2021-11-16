<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }

    function showGLBB() {
        //source untuk data / proses bisnis yg di olah
        return view('showglbb') ;
    }

    function liatHasil(Request $request) {
        //source untuk data / proses bisnis yg di olah
        return view('liathasil') ;
    }
}
