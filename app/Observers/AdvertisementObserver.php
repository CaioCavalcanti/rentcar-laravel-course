<?php

namespace App\Observer;

use App\Models\Advertisement;

class AdvertisementObserver
{
    /**
     * @param Advertisement $advertisement
     */
    public function creating(Advertisement $advertisement)
    {
    }
}