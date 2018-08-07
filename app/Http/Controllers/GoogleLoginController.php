<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\GoogleAccountService;

class GoogleLoginController extends Controller
{
    /**
     * Create a redirect method to facebook api.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(GoogleAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
        auth()->login($user);

        $notification = [
            'message' => 'Login with Google account Successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->to('/')->with($notification);
    }
}
