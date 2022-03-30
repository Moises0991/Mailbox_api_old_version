<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class Sign_inController extends Controller
{
    // public function sorting(Request $credentials) {
        // $data = json_decode(file_get_contents('php://input'));
        // return response()->json(['message'=>'all is function']);

        // return view('welcome');

        // if($credentials->type === 'student') {
        //     // return redirect(route('sign_in_student'));

        // } else if($credentials->type === 'administrator') {
        //     return redirect(route('sign_in_student'));
            
        // } else {
        //     return response()->json([
        //         'message' => 'Tipo de usuario inexistente',
        //         'access' => 'denied'
        //     ]);
        // }
    // }

    public function student() {
        return response()->json([
            'id' => '1',
            'name' => 'Moises',
            'surname' => 'Soler Zetina',
            'password' => '0991',
            'email' => 'moises0991@gmail.com',
        ]);
    }
    
    public function administrator() {
        return response()->json([
            'id' => '1',
            'name' => 'Juan',
            'surname' => 'Medina Ramirez',
            'password' => '0991',
            'email' => 'juan@gmail.com',
        ]);
    }

    // public function auth_attempt(Request $sign_inCredentials) {

    //     $credentials = $sign_inCredentials->only('email', 'password');
    //     if(Auth::attempt($credentials)){

    //         return redirect()->intended(route('home'));

    //     } else {

    //         return back()->withErrors([
    //             'message' => 'Usuario o contraseña erroneos'
    //         ]);
    //     }
    // }

    // login with google
    // public function redirectToGoogle() {
    //     return Socialite::driver('google')->redirect();
    // }

    // validation or user creation with google
    // public function callbackFromGoogle() {

    //     $student = Socialite::driver('google')->user();
    //     $isStudent = Student::where('external_id', $student->id)->where('external_auth', 'google')->first();

    //     if($isUser) {
    //         Auth::login($isUser);
    //     } else {
    //         $userNew = User::create([
    //             'name' => $user->name,
    //             'email' => $user->email,
    //             'avatar' => $user->avatar,
    //             'external_id' => $user->id,
    //             'external_auth' => 'google'
    //         ]);

    //         Auth::login($userNew);
    //     }

    //     return redirect(route('home'));
    // }


    // function destroy
    public function destroy($id) {
        Auth::logout();
        return redirect()->intended(route('login'));
    }

}
