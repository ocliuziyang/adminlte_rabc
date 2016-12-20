<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //先插入页面权限「'控制台'，'博客'，'系统管理'」
        DB::table('permissions')->insert([
            ['id' => 1,'fid' => 0, 'name' => 'admin.index', 'is_menu' => true, 'display_name' => 'Dashboard', 'description' => '页面'],
            ['id' => 2, 'fid' => 0, 'name' => 'admin.blog.index', 'is_menu' => true, 'display_name' => 'Blog', 'description' => '页面'],
            ['id' => 3, 'fid' => 0, 'name' => '#f98894389324', 'is_menu' => true, 'display_name' => 'System Setting', 'description' => '页面'],
            ['id' => 4, 'fid' => 3, 'name' => 'admin.user.index', 'is_menu' => true, 'display_name' => 'System Entrust', 'description' => '页面']
        ]);
    }
}
