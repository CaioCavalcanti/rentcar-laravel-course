<?php

use App\Domain\Contracts\UsersContract;
use App\Models\User;

class UsersRepository implements UsersContract {
    /**
     * @param $params
     * @return App\Models\User
     */
    public function create($params)
    {
        $user = (new User())->fill($params);
        $user->save();

        return $user;
    }
}