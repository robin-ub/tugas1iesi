<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakDokumenTahap1Controller extends Controller
{
    public function index()
    {
        return view('cetak_dokumen_tahap1');
    }
}