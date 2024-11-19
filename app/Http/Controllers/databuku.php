<?php

namespace App\Http\Controllers;

use App\Models\data_buku;
use Illuminate\Http\Request;

class databuku extends Controller
{
    public function index(){
        $buku = data_buku::select('*')->get();

        return view('databukuview', [
            'judul' => 'Data Buku', 
            'session' => 'Aris Wahyudi', 
            'data_buku' => $buku
    
    ]); }
}
