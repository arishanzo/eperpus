<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_kembalian extends Model
{
   
    use HasFactory;
    protected $table = 'pengembalian_buku';
    protected $primaryKey = 'id_pengembalian';

    protected $fillable = [
        'id_pengembalian',
  'id_santri' ,
  'tglpengembalian'
  
    ];
}
