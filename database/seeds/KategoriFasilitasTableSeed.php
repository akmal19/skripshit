<?php

use Illuminate\Database\Seeder;

class KategoriFasilitasTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_fasilitas')->delete();
        DB::table('kategori_fasilitas')->insert(array(
          array(
              'kategori' => 'Ruangan dan Lab'
          ),
          array(
              'kategori' => 'Komputer dan Alat Bengkel'
          ),
        ));
    }
}
