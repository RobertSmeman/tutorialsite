<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers; // locatie is: vendor\laravel\framework\src\illuminate\foundation\auth

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/succes';    // als je inlogd word je naar deze pagina gestuurd.


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');   // als je guest bent dan word je uitgelogd??????
    }


}
