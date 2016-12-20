<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository {

    private $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * 获取所有用户
     * @return static
     */
    public function allRoles()
    {
        return $this->role->all()->sortBy('asc');
    }

}