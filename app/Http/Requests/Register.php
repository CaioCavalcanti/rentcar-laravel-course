<?php

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {
    /**
     * @return bool
     */
    public function  authorize() {
        // return app()->make(RoleService::class)->isAdmin();
        return true;
    }

    /**
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ];
    }
}