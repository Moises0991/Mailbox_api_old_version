<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Models\Admin;


class Sign_inController extends Controller
{
    public function sorting(Request $credentials) {

        // $credentials->type = 'student';
        
        // if($credentials->type == 'student') {
            
            // sign_in_student();
        // } else if($credentials->type == 'admin') {
            // sign_in_student();
        // } else {
        //     return 'the sorting failed';
        // }
    }

    // public function student() {
        // $student = Student::all();
        // return $credentials = [
        //     'email' => 'Juana',
        //     'password' => 'soler'
        // ];

    //     return 'this is a shit';
    // }


    
    // public function admin(Request $sign_inCredentials) {

        // $credentials = [
        //     'email' => 'Juana',
        //     'password' => 'soler'
        // ];

        // Auth::login($credentials);
        // $credentials = $sign_inCredentials->only('email', 'password');

        // if(Auth::attempt($credentials)){
        //     return "si estoy aqui";
        // }else{
        //     return "aqui no ando ";
            // return back()->withErrors([
            //     'message' => 'No se completo la autentificación'
            // ]);
        // }
    // }


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
    // public function destroy($id) {
    //     Auth::logout();
    //     return redirect()->intended(route('login'));
    // }

}
