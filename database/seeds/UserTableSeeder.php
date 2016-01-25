<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => 'Cihan',
            'email' => 'cihan@example.com',
            'password' => bcrypt('qwe123qwe'),
        ]);
        
    }
}
