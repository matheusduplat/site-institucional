<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user; 
    }
    public function register(RegisterRequest $request)
    {
        $user = $this->user->create($request->validated());
        $token = $user->createToken('auth_token')->plainTextToken;
        dd($token);
    }
    public function teste()
    {
        dd('loguei');
    }
}
