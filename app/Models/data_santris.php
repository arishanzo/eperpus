<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_santris extends Model
{
    use HasFactory;

         /**
     * fillable
     *
     * @var array
     */

     protected $table = 'dt_santri';
     protected $primaryKey = 'id_santri';

    protected $fillable = [
        'id_santri',
        'nama_santri',
        'nis',
        'kelas',
        'asrama',
        'status',
    ];
}
