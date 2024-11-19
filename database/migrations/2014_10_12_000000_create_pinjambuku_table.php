<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjam_bukus', function (Blueprint $table) {
            $table->increments('id_pinjambuku');
            $table->integer('id_buku');
            $table->integer('id_santri');
            $table->integer('jumlah');
            $table->date('tglpinjam');
            $table->date('tgljatuhtempo');
            $table->string('statuspinjam');
        });
    }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('pinjam_buku');
    // }
};
