<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/userrolecheck';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Log::info('Showing user profile for user:');
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            //print_r($e);
            return redirect('/login');
        }
        // only allow people with @company.com to login
        /*if(explode("@", $user->email)[1] !== 'company.com'){
            echo "hello";
            return redirect()->to('/');
        }*/
        /*echo "<prE>";
        print_r($user);
        exit();*/
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            if($existingUser->avatar == '')
            {
                $existingUser->avatar               =    $user->avatar;
            }
            if($existingUser->avatar_original == '')
            {
                $existingUser->avatar_original      =    $user->avatar_original;
            }
            if($existingUser->google_id == '')
            {
                $existingUser->google_id            =    $user->id;
            }
            $existingUser->save();
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->password        = Null;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to('/userrolecheck');
    }
}
