<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 获取所有用户
     * @return static
     */
    public function allUsers()
    {
        return $this->user->all()->sortBy('asc');
    }

}