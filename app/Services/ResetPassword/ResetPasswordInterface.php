<?php

namespace App\Services\ResetPassword;

interface ResetPasswordInterface
{

    /**
     * @param $request
     * @return mixed
     */
    public function generateResetToken($request);

    /**
     * @param $request
     * @return mixed
     */
    public function resetPassword($request);
}
