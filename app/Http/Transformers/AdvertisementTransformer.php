<?php


use App\Models\Advertisement;
use League\Fractal\TransformerAbstract;

class AdvertisementTransformer extends TransformerAbstract {
    /**
     * @param Advertisement $advertisement
     * @return array
     */
    public function  transform(Advertisement $advertisement) {
        return [
            'name' => $advertisement->name,
            'email' => $advertisement->email,
            'api_token' => $advertisement->api_token
        ];
    }
}