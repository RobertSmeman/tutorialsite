<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');    // alleen teogeankelijk als je bent ingelogt
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',    // moet zijn ingevuld, max 255 tekens.
            'surname' => 'required|string|max:255',   // moet zijn ingevuld, max 255 tekens.
            'email' => 'required|string|email|max:255|unique:users',    // moet zijn ingevuld, moet een email zijn (??????), max 255 tekens, moet uniek zijn in de users tabel (??????)
            'password' => 'required|string|min:6|confirmed',    // moet zijn ingevuld, minstens 6 tekens, moet bevestigd zijn daarom dus herhaal wachtwoord.
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],    // dit word in de user tabel gezet nadat het is gevalidate, wat hier boven gebeurd.
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),    // bcrypt zodat het wachtwoord niet te lezen is in de database.
        ]);
    }
}
