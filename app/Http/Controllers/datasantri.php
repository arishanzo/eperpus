<?php

namespace App\Http\Controllers;

use App\Models\data_santris;
use Illuminate\Http\Request;

class datasantri extends Controller
{
     public function index(){
        $santri = data_santris::select('*')->get();

        return view('santriview', [
            'judul' => 'Santri', 
            'session' => 'Aris Wahyudi', 
            'data_santri' => $santri
    
    ]);
    }
}
