<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserService implements UserServiceInterface
{

    /**
     *Create New user
     *
     * @param $request
     * @return JsonResponse
     */
    public function register($request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = app('hash')->make($request->password);
        $user->save();

        return $this->signIn($request);
    }

    /**
     * sign-In Users
     *
     * @param $request
     * @return JsonResponse
     */
    public function signIn($request)
    {
        if (!$token = auth()->attempt(request(['email', 'password']))) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }


    /**
     * Get the token array structure.
     *
     * @param string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }


}
