<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //新建角色
        DB::table('roles')->insert(
            ['id' => 1, 'name' => 'owner', 'display_name' => 'owner', 'description' => '项目创建者'],
            ['id' => 2, 'name' => 'admin', 'display_name' => 'admin', 'description' => '项目管理者']
        );

        DB::table('permission_role')->insert([
                ['permission_id' => 1, 'role_id' => 1],
                ['permission_id' => 2, 'role_id' => 1],
                ['permission_id' => 3, 'role_id' => 1],
                ['permission_id' => 4, 'role_id' => 1]
        ]);

    }
}
