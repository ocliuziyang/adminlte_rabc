<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['id' => 1,'name' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin'), 'phone_num' => '18916550105'],
            ['id' => 2, 'name' => 'owner', 'email' => 'owner@owner.com', 'password' => Hash::make('owner'), 'phone_num' => '18916550104']
        ]);

        DB::table('role_user')->insert([
            ['user_id' => 2, 'role_id' => 1]
        ]);
    }
}
