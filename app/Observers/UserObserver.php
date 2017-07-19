<?php

namespace App\Observer;

use App\Models\User;

class UserObserver {
    /**
     * @param User $user
     */
    public  function creating(User $user)
    {
        $user->password = bcrypt($user->password);
        $user->api_token = str_random(60);
    }
}