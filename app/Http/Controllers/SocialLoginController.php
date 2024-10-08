<?php

namespace App\Http\Controllers;

use App\Models\SocialLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function toProvider($driver){

         // Define valid drivers
        $validDrivers = ['google'];

        // Check if the provided driver is valid
        if (!in_array($driver, $validDrivers)) {
            return redirect()->route('login')->withErrors(['msg' => 'Invalid social login provider.']);
        }

        return Socialite::driver($driver)->redirect();
    }

    public function handleCallBack($driver)
    {

        // Define valid drivers
        $validDrivers = ['google'];

        // Check if the provided driver is valid
        if (!in_array($driver, $validDrivers)) {
            return redirect()->route('login')->withErrors(['msg' => 'Invalid social login provider.']);
        }

        try {
            $user = Socialite::driver($driver)->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['msg' => 'Failed to authenticate using Google.']);
        }

        // Check if the user already exists in the social_logins table
        $user_account = SocialLogin::where('provider', $driver)->where('provider_id', $user->getId())->first();

        if ($user_account) {

            // Check if the user is banned (is_active = 0)
            if (!$user_account->user->is_active) {
                return redirect()->route('login')->withErrors(['msg' => 'Please Contact Customer Support.']);
            }

            Auth::login($user_account->user);
            Session::regenerate();
            return $this->redirectToDashboard($user_account->user);
        }

        // Check if the user exists in the users table
        $db_user = User::where('email', $user->getEmail())->first();

        if (!$db_user) {
            // If no user is found, create a new one
            $db_user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => \Illuminate\Support\Facades\Hash::make(\Illuminate\Support\Str::random(16)),
            ]);
        }

        // Check if the newly created or existing user is banned
        if (!$db_user->is_active) {
            return redirect()->route('login')->withErrors(['msg' => 'Please contact customer support.']);
        }

        // Link the user to the social login table
        SocialLogin::create([
            'provider' => $driver,
            'provider_id' => $user->getId(),
            'user_id' => $db_user->id,
        ]);

        Auth::login($db_user);
        Session::regenerate();

        return $this->redirectToDashboard($db_user);
    }

    /**
     * Redirect the user to their dashboard based on their role.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectToDashboard(User $user)
    {
        // Check the role of the user and redirect accordingly
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Adjust the route name as necessary
        }

        return redirect()->route('home'); // Default redirect for 'user'
    }

}
