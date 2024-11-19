<?php

namespace App\Http\Controllers;

use App\Models\data_denda;
use App\Models\data_kembalian;
use App\Models\data_pinjam;
use Illuminate\Http\Request;

class datapinjam extends Controller
{
    public function index(){
        
        $pinjam = data_pinjam::select('*')
        ->join('dt_santri', 'dt_santri.id_santri', '=', 'pinjam_buku.id_santri')
        ->join('dt_buku', 'dt_buku.id_buku', '=', 'pinjam_buku.id_buku')
        ->get();
        $denda = data_denda::select('*')
        ->join('dt_santri', 'dt_santri.id_santri', '=', 'dt_denda.id_santri')
        ->join('dt_buku', 'dt_buku.id_buku', '=', 'dt_denda.id_buku')
        ->get();

        $kembalian = data_kembalian::select('*')
        ->join('dt_buku', 'dt_buku.id_buku', '=', 'pengembalian_buku.id_buku')
        ->get();;

        return view('datapinjamview', [
            'judul' => 'Data Pinjam dan Kembalian', 
            'session' => 'Aris Wahyudi', 
            'data_pinjam' => $pinjam,
            'data_denda' => $denda,
            'kembalian' => $kembalian
    
    ]);    }
}
