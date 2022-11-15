<?php

namespace App\Services\User;

interface UserServiceInterface
{
    /**
     * @param $request
     * @return mixed
     */
    public function register($request);


    /**
     * @param $request
     * @return mixed
     */
    public function signIn($request);

}
