<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

    		$arg1 = [
          [
      			'name'     => 'Administrator',
      			'email'    => 'admin@skripsi',
      			'password' => Hash::make('admin'),
      		],
          [
      			'name'     => 'Penanggung Jawab Ruangan dan Lab',
      			'email'    => 'admin@lab',
      			'password' => Hash::make('admin'),
      		],
          [
      			'name'     => 'Pendataan dan Pengadaan Fasiltas',
      			'email'    => 'admin@data',
      			'password' => Hash::make('admin'),
      		],
          [
      			'name'     => 'Keuangan',
      			'email'    => 'admin@keuangan',
      			'password' => Hash::make('admin'),
      		],
          [
      			'name'     => 'Koordinator Ruangan dan Lab',
      			'email'    => 'admin@koordinator',
      			'password' => Hash::make('admin'),
      		]
        ];

        foreach($arg1 as $data) {
          User::create($data);
        }
    }
}
