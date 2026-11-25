<?php

namespace App\Http\Controllers;

use App\Models\kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index1()
    {
        $kunjungan = kunjungan::orderBy('id_kunjungan','desc')->get();
        $totalkunjungan = kunjungan::count();
        $totaltunggu = kunjungan::where('status','menunggu')->count();

        return view ('index1', [
            'kunjungan' => $kunjungan,
            'totalkunjungan' => $totalkunjungan,
            'totaltunggu' => $totaltunggu,
        ]);
    }
    public function create()
    {
        return view('tambah');
    }
    public function tambah()
    {

    }
    public function simpan (Request $request)
    {

    }
    public function hapus()
    {

    }
}
