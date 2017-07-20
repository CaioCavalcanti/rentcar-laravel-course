<?php

use App\Domain\Contracts\AdvertisementContract;
use App\Models\Advertisement;

class AdvertisementRepository implements AdvertisementContract {
    public function create(array $params) {
        $advertisement = (new Advertisement())->fill($params);
        $advertisement->save();

        return $advertisement;
    }
}