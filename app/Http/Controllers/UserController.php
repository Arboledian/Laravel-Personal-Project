<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //php artisan make:controlle UserController
    //no es necesario crear una tabla users puesto que Laravel viene con una por defecto,
    //esta tabla user viene con opciones de nombre, email, contraseña y confirmación, no obstante
    //si tuviera que agregar un campo adicional se puede modificar.


    //Show register/create form
    public function register(){
        return view('users.register');
    }

    //Create user
    public function store(Request $request){
        //fF es una variable, la request es la informacion que se envio con el metodo post en la vista registro
        //esto sirve para validar los datos que se ingresaran a la base de datos
        $formFields = $request->validate([
            'name'=>['required'],
            'email'=>['required', 'email', Rule::unique('users','email')],
            'password'=>'required|confirmed|min:8'
        ]);
        //encriptado de la contraseña
        //el tipo de incriptado que se usa es hashing, el cual transforma los caracteres en *
            $formFields['password'] = bcrypt($formFields['password']);

            //crear user
            $user = User::create($formFields);

            //login
            auth()->login($user);

            //redirige a la url a la vez que muestra un mensaje
            return redirect('/')->with('message', 'Logged succesfully');


    }
    // Logout User
    public function logout(Request $request) {
        //Logout
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redirige a la url a la vez que muestra un mensaje
        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Show Login View
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            //información necesaria para iniciar sesión
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        //validación
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}
