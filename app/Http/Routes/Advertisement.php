<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar as Router;

class Advertisement {
    /**
     * @param Router $router
     */
    public function map(Router $router) {
        # Protected routes
        $router->group(['middleware' => 'auth:api'], function(Router $router) {
           $router->resource('advertisement', 'AdvertisementController');
           # Toggle published
           $router->post('advertisement/{{uuid}}/toggle-published', 'AdvertisementController@togglePublished');
        });

        # Search
        $router->get('/advertisement', 'AdvertisementController@search');
        # Get by ID
        $router->get('/advertisement/{{uuid}}', 'AdvertisementController@getById');
    }
}