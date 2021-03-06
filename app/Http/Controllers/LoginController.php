<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function auth_attempt(Request $sign_inCredentials) {

        $credentials = $sign_inCredentials->only('email', 'password');
        if(Auth::attempt($credentials)){

            return redirect()->intended(route('home'));

        } else {

            return back()->withErrors([
                'message' => 'Usuario o contraseña erroneos'
            ]);
        }
    }

    // login with google
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    // validation or user creation with google
    public function callbackFromGoogle() {

        $student = Socialite::driver('google')->user();
        $isStudent = Student::where('external_id', $student->id)->where('external_auth', 'google')->first();

        if($isUser) {
            Auth::login($isUser);
        } else {
            $userNew = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar,
                'external_id' => $user->id,
                'external_auth' => 'google'
            ]);

            Auth::login($userNew);
        }

        return redirect(route('home'));
    }







    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    // function destroy
    public function destroy($id) {
        Auth::logout();
        return redirect()->intended(route('login'));
    }
}
