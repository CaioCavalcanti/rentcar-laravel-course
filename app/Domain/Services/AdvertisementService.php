<?php

class AdvertisementService {
    private $repository;

    function __construct(AdvertisementContractor $repository)
    {
        $this->respository = $repository;
    }

    function create(array $params) {
        $this->repository->create($params);
    }
}