<?php

namespace App\Services\ResetPassword;

use Illuminate\Auth\Passwords\PasswordBrokerManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordService implements ResetPasswordInterface
{

    /**
     * Send password reset to the user with this email address
     *
     * @param $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function generateResetToken($request)
    {


        return $this->broker()->sendResetLink(
            $request->only('email')) == Password::RESET_LINK_SENT
            ? response()->json(['successfully' => 'Send'])
            : response()->json(['error' => 'Not send']);
    }

    /**
     * Reset Password
     *
     * @param $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function resetPassword($request)
    {
        $this->broker()->reset(
            $this->credentials($request),
            function ($user, $password) {
                $user->password = app('hash')->make($password);
                $user->save();
            }
        );

        return Password::PASSWORD_RESET
            ? response()->json(true)
            : response()->json(false);
    }


    /**
     * Get the password reset credentials from the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only('email', 'password', 'token');
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    protected function broker()
    {
        $passwordBrokerManager = new PasswordBrokerManager(app());
        return $passwordBrokerManager->broker();
    }
}
