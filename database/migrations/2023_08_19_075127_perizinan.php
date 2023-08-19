<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('no_ktp');
            $table->text('alamat_pemohon');
            $table->string('no_telp_hp');
            $table->string('nama_perusahaan', 255);
            $table->string('bentuk_perusahaan');
            $table->string('npwp');
            $table->string('kegiatan_usaha', 255);
            $table->string('sarana_usaha', 255);
            $table->text('alamat_usaha');
            $table->double('jumlah_modal');
            $table->date('masa_berlaku');
            $table->date('disahkan_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perizinan');
    }
};
