<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Admin can manage users,articles,comments',
        ]);
        DB::table('roles')->insert([
            'name' => 'author',
            'display_name' => 'Author',
            'description' => 'Author can create and update articles',
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'User can make comments',
        ]);
        DB::insert('insert into role_user (user_id,role_id) values(?,?)', [1,1]);
    }
}
