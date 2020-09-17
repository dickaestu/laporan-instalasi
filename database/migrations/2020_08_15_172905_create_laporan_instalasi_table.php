<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanInstalasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_instalasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id_teknisi');
            $table->enum('sto', ['CPD', 'CKL', 'LGK', 'PPG', 'CUG', 'PKU']);
            $table->string('no_permintaan');
            $table->string('nomor_telepon');
            $table->string('nomor_internet');
            $table->string('nama_pelanggan');
            $table->date('tanggal_wo');
            $table->text('alamat');
            $table->string('rk_msan_odc');
            $table->string('dp_odp');
            $table->string('klem');
            $table->string('kec');
            $table->string('ac_of_sm_1b');
            $table->string('breket_a');
            $table->string('rs_in_sc_1');
            $table->string('soc_ils');
            $table->enum('ont', ['ZTE', 'Huawei', 'Fiber Home']);
            $table->boolean('indikator_ont_power')->default(false);
            $table->boolean('indikator_ont_dsl')->default(false);
            $table->boolean('indikator_ont_internet')->default(false);
            $table->string('nama_anggota_1');
            $table->string('nama_anggota_2');
            $table->string('stb_tambahan')->nullable();
            $table->string('sn_ont')->nullable();
            $table->string('sn_plc')->nullable();
            $table->string('sn_wifi_ext')->nullable();
            $table->string('mac_address_stb')->nullable();
            $table->enum('psb', ['1P [Voice] / 1P [Internet]', '2P [Voice + Internet]', '3P'])->nullable();
            $table->enum('tambahan', ['change stb', 'plc', 'indibox', 'stb tambahan', 'wifi extender'])->nullable();
            $table->enum('migrasi', [
                'Infrastruktur 1P-1P[Voice]',
                'Infrastruktur 1P-1P[Internet]',
                'Infrastruktur 1P-2P[Voice + Internet]',
                'Infrastruktur 1P-2P[Internet + Usee Tv]',
                'Infrastruktur 2P-2P[Internet + Voice]',
                'Infrastruktur 2P-2P[Internet + Usee Tv]',
                'Infrastruktur 1P-3P',
                'Infrastruktur 2P-3P',
                'Infrastruktur 3P-3P',
                'Layanan 1P-2P[Voice + Internet]',
                'Layanan 1P-2P[Internet + Usee Tv]',
                'Layanan 1P-3P',
                'Layanan 2P-3P',
            ])->nullable();
            $table->enum('speed', ['10 MB', '20 MB', '30 MB', '40 MB', '50 MB', '100 MB', '200 MB', '300 MB', 'Other']);
            $table->timestamps();


            $table->foreign('users_id_teknisi')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_instalasi');
    }
}
