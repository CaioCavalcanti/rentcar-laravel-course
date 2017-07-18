<?php

use App\Domain\Contracts\UsersContract;

class UserService
{
    private $repository;

    /**
     * UserService constructor.
     * @param UsersContract $repository
     */
    public function __construct(UsersContract $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params) {
        return $this->repository->create($params);
    }
}