<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use RegisterRequest;
use UserService;
use UserTransformer;

class RegisterController extends Controller
{
    private $service;

    /**
     * Create a new controller instance.
     *
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @param RegisterRequest $request
     * @return \Spatie\Fractal\Fractal
     */
    public function register(RegisterRequest $request) {
        $user = $this->service->create($request->all());

        return fractal($user, new UserTransformer);
    }
}
