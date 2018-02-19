<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('semester');
            $table->string('pj');
            $table->timestamps();
        });

        Schema::create('kategori_fasilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->timestamps();
        });

        Schema::create('fasilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('barang');
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->string('kuantitas');
            $table->timestamps();
        });

        Schema::create('inventaris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('barang');
            $table->string('deskripsi')->nullable();
            $table->string('brand')->nullable();
            $table->string('type')->nullable();
            $table->string('kuantitas');
            $table->string('layak');
            $table->string('perbaikan');
            $table->string('tidak_layak');
            $table->timestamps();
        });

        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('kategori');
            $table->string('id_guru')->nullable();
            $table->string('barang');
            $table->string('kuantitas');
            $table->string('lama_pinjaman');
            $table->string('keperluan_pinjaman');
            $table->timestamps();
        });

        Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('barang');
            $table->string('deskripsi')->nullable();
            $table->string('brand')->nullable();
            $table->string('type')->nullable();
            $table->string('kuantitas');
            $table->string('satuan_harga');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_guru');
            $table->string('nama');
            $table->string('password');
            $table->string('role');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('berita_acara', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('nama');
            $table->string('barang');
            $table->string('brand')->nullable();
            $table->string('jumlah');
            $table->string('harga');
            $table->string('tgl_pengajuan');
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
        Schema::drop('ruangan');
        Schema::drop('inventaris');
        Schema::drop('kategori_fasilitas');
        Schema::drop('fasilitas');
        Schema::drop('peminjaman');
        Schema::drop('admin');
        Schema::drop('pengajuan');
        Schema::drop('roles');
        Schema::drop('berita_acara');
    }
}
