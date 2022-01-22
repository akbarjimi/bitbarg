<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\AuthRegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class AuthController extends Controller
{
    public function register(AuthRegisterRequest $request)
    {
        $user = User::create($request->safe()->all());

        $user->createToken('login');

        return new UserResource($user);
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function revoke()
    {

    }
}
