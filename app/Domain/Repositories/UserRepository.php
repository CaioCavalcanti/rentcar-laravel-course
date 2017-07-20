<?php

use App\Domain\Contracts\UserContract;
use App\Models\User;

class UserRepository implements UserContract {
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