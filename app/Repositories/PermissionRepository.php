<?php

namespace App\Repositories;

use App\Models\Permission;
use phpDocumentor\Reflection\Types\Array_;

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

    public function savePermission($request)
    {

        $this->permission->fid = $request['fid'];
        $this->permission->is_menu = isset($request['is_menu']) ? true : false ;
        $this->permission->name = $request['name'];
        $this->permission->display_name = $request['display_name'];
        $this->permission->description = $request['description'];

        $res = $this->permission->save();
        return $res;
    }

    //获取 permission 信息
    public function findPermissionById($id)
    {
        return $this->permission->find($id);
    }


    /*删除数组中的键值对*/
    public function array_remove($array, $key)
    {
        if (!array_key_exists($key, $array)) {
            //不存在
            return $array;
        } else {

        }
    }
    
}