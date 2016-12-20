<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository implements PermissionInterface {

    private $permission;

    function __construct(Permission $_permission)
    {
        $this->permission = $_permission;
    }

    /**
     * 获取菜单父权限，侧边栏显示的父菜单
     * @return mixed
     */
    public function menuPermissions()
    {
        $results = $this->permission->where('fid', 0)->where('is_menu', true)->get();
        return $results;
    }


    /*获取所有权限*/

    public function allPermissions()
    {
        $results = $this->permission->all();
        return $results;
    }

}