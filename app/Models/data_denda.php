<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_denda extends Model
{
   
    
    use HasFactory;
    protected $table = 'dt_denda';
    protected $primaryKey = 'id_denda';

    protected $fillable = [
        'id_denda',
  'id_santri' ,
  'id_buku',
  'tgldenda' ,
  'denda' ,
  'status_pembayaran' 
    ];
}
