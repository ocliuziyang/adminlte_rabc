<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    //
    protected $fillable = ['id', 'fid', 'name', 'display_name', 'description','is_menu'];

    public function getSubPermissionsAttribute()
    {
        return Permission::where('fid', $this->id)->get();
    }

    //获取当前菜单的子菜单
    public function getSubmenuPermissionsAttribute()
    {
        return Permission::where('fid', $this->id)->where('is_menu', true)->get();
    }
}
