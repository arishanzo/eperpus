<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_buku extends Model
{
    use HasFactory;
    protected $table = 'dt_buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = [
        'id_buku',
        'judul_buku',
        'pengarang',
        'kategori',
        'isbn',
        'tahunterbit',
        'jumlahsalinan'
    ];
}
