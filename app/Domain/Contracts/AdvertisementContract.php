<?php

namespace App\Domain\Contracts;

interface AdvertisementContract {
    public function create(array $params);
}