<?php

namespace App\Domain\Contracts;

use App\Models\User;

interface UsersContract
{
    /**
     * @param $params
     * @return mixed
     */
    public function create($params);
}