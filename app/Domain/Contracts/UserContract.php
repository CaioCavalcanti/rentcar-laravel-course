<?php

namespace App\Domain\Contracts;

interface UserContract
{
    /**
     * @param $params
     * @return mixed
     */
    public function create($params);
}