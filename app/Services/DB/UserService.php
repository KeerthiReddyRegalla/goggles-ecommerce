<?php

namespace App\Services\DB;


use App\Models\User;

class UserService
{
    /**
     * @return User
     */
    public static function query(): User
    {
        return new User();
    }

    /**
     * @return UserService
     */
    public static function build(): UserService
    {
        return new self();
    }

}
