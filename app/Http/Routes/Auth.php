<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar as Router;

class Auth {
    /**
     * @param Router $router
     */
    public function map(Router $router) {
        # Register
        $router->post('/register', 'AuthController@register');
        # Recover password
        # Login
        $router->post('/login', 'LoginController@login');
        # Logout
        $router->post('/logout', 'LoginController@logout');
    }
}