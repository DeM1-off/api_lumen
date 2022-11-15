<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPassword\EmailRequest;
use App\Http\Requests\ResetPassword\ResetPasswordRequest;
use App\Services\ResetPassword\ResetPasswordInterface;


class PasswordController extends Controller
{


    /**
     * @var ResetPasswordInterface
     */
    private $resetPasswordService;

    public function __construct(ResetPasswordInterface $resetPasswordService)
    {
        $this->resetPasswordService = $resetPasswordService;
    }


    /**
     *  Send reset password email
     *
     * @param EmailRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function generateResetToken(EmailRequest $request)
    {
        return $this->resetPasswordService->generateResetToken($request);
    }


    /**
     * Reset Password
     *
     * @param ResetPasswordRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        return $this->resetPasswordService->resetPassword($request);
    }


}
