<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakDokumenTahap2Controller extends Controller
{
    public function index()
    {
        return view('cetak_dokumen_tahap2');
    }
}