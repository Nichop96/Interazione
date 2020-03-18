<?php

namespace ORC\Http\Controllers\Auth;

use ORC\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    //protected $redirectTo = 'home';
    
    protected function authenticated(Request $request, $user)    {
        if($user->hasAnyRole('Admin')) {
            return redirect()->intended('admin/index');
        } 
        else{

        if($user->hasAnyRole('User')) {
            return redirect()->intended('user/index');
        }
        else{
            return "Ciao";
        }
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
