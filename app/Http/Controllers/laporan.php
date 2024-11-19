<?php

namespace App\Http\Controllers;

use App\Models\data_denda;
use App\Models\data_kembalian;
use Illuminate\Http\Request;

class laporan extends Controller
{
    public function index(){
        $denda = data_denda::select('*')
        ->join('dt_santri', 'dt_santri.id_santri', '=', 'dt_denda.id_santri')
        ->join('dt_buku', 'dt_buku.id_buku', '=', 'dt_denda.id_buku')
        ->get();

        $kembalian = data_kembalian::select('*')
        ->join('dt_buku', 'dt_buku.id_buku', '=', 'pengembalian_buku.id_buku')
        ->get();;

     
        return view('datalaporanview', [ 'judul' => 'Data Pinjam dan Kembalian', 
        'session' => 'Aris Wahyudi', 
      
        'data_denda' => $denda,
        'kembalian' => $kembalian]);
    }
}
