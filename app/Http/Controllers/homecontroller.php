<?php

namespace App\Http\Controllers;

use App\Models\data_pinjam;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use illuminate\Http\Request;

class homecontroller extends BaseController
{
    public function index(){
        $pinjam = data_pinjam::select('*')
        ->join('dt_santri', 'dt_santri.id_santri', '=', 'pinjam_buku.id_santri')
        ->join('dt_buku', 'dt_buku.id_buku', '=', 'pinjam_buku.id_buku')
        ->get();

        return view('welcome', ['judul' => 'Dashboard', 'session' => 'Aris Wahyudi', 'data_pinjam' => $pinjam]);
    }
}
