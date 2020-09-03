<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;

class AuthController extends Controller
{
    public function getRegisterForm(){
        return view('register');
    }

    public function register(RegisterRequest $request) {
        // validiraj request
        $data = $request->validated();
        //kreiraj usera

        

        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password'])
        ]);

    
        //redirektuj negde

        return redirect('/posts');
    }

    public function getLoginForm() {
        
        return view('login');
    }

    public function login(Request $request) {
       $email = $request->get('email', '');
       $password = $request->get('password', '');
 
     if (auth()->attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return redirect('/posts');
        }

        return view('login', ['loginFailed'=>true]);
/*      ovo je drugi nacin, koristili bi da nam sifra nije kriptovana (bcrypt)

       $user = User::where('email', $email)->first();
       info('dobio korisnika iz baze');

       
       if ($user && $user->password == $password) {
           info('uspesan login');
           auth()->login($user);
           info(auth()->user());
           return ['user'=>auth()->user()];


        return redirect('/posts');
       
       }

       return redirect('login');
        */
    }

}
