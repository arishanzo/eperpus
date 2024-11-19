<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pinjam extends Model
{
  

    use HasFactory;
    protected $table = 'pinjam_buku';
    protected $primaryKey = 'id_pinjambuku';

    protected $fillable = [
        'id_pinjambuku',
        'id_buku' ,
        'id_santri' ,
        'jumlah',
        'tglpinjam',
    'tgljatuhtempo',
        'statuspinjam'
    ];
}
