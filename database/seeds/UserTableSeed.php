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
        DB::table('users')->delete();
    		User::create(array(
    			'name'     => 'Admiinistrator',
    			'email'    => 'admin@skripsi',
    			'password' => Hash::make('admin'),
    		));
    }
}
