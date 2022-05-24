<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    use RegistersUsers; //Trait classe predefinita che mette a disposizone una serie di metodi già predefiniti

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/'; //proprietà predefinita che specifica la rotta a cui viene reindirizzato l'utente a fine registrazione

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest'); //metodo che ci consente di attivare i gate 
    }

    /**
     * Get a validator for an incoming registration request.
     * Sovrascriviamo uno dei metodi predefinifiti del trait RegisterUsers
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string','max:255'],
            'data_nascita' =>['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' =>['required', 'string', 'min:8', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cellulare' =>['required','string','min:10', 'max:10','unique:users'],
            'livello' => ['required','integer']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     * Procedura per la creazione di utenti una volta che la procedura è stata validata,
     * meccanismo che associa i dati della vista alle proprietà della classe Users che sarà mappato nella tupla della base di dati
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cognome' => $data['cognome'],
            'data_nascita' => $data['data_nascita'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'cellulare' => $data['cellulare'],
            'livello' => $data['livello']
        ]);
    }
}
