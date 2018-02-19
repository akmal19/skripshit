<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterKodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            $table->string('kode')->after('kategori');
        });

        Schema::table('pengajuan', function (Blueprint $table) {
            $table->string('kode')->after('kategori');
        });

        Schema::table('inventari', function (Blueprint $table) {
            $table->string('kode')->after('kategori');
        });

        Schema::table('peminjaman', function (Blueprint $table) {
            $table->string('kode')->after('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            $table->dropColumn('kode');
        });

        Schema::table('pengajuan', function (Blueprint $table) {
            $table->dropColumn('kode');
        });

        Schema::table('inventari', function (Blueprint $table) {
            $table->dropColumn('kode');
        });

        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropColumn('kode');
        });
    }
}
