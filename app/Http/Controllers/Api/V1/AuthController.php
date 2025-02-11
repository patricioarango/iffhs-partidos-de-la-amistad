<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginApi;
use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponses;
    public function login(UserLoginApi $request) {

        if (!Auth::attempt($request->only('email', 'password'))) {
            return $this->error('Invalid credentials', 401);
        }

        //$user = User::firstWhere('email', $request->email);
        $user = Auth::user();
        //return response()->json(['message' => 'Authenticated', 'user' => $user]);
        return $this->ok(
            [
                'access_token' => $user->createToken('API token for ' . $user->email)->plainTextToken
            ]
        );
    }
}
