<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        DB::transaction(function () use($request, &$user){
            $user = User::create($request->all());
            $user->assignRole('customer');
        });
        return redirect()->route('login')->with(['success'=> 'Successfully Registered! Login to Continue']);
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($this->attemptLogin($request)) {
            if($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }
            $mfa =  \Illuminate\Support\Facades\DB::table('users')->where('id', auth()->user()->id)->first();
           if($mfa->two_factor_secret){
               return redirect()->route('two-factor-challenge');
           }
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with(['error' => 'Email or Password Incorrect']);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $request->only('email', 'password'), $request->boolean('remember')
        );
    }


    /**
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|JsonResponse|RedirectResponse|Redirector
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }


    protected function guard(): \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
    {
        return Auth::guard();
    }

    protected function incrementLoginAttempts(Request $request)
    {
        $this->limiter()->hit(
            $this->throttleKey($request), $this->decayMinutes() * 60
        );
    }

}
