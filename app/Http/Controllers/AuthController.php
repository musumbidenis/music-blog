<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Alert;
use Session;

class AuthController extends Controller
{
    /*GET
     */
    public function registrationForm()
    {
        return view('auth.register');
    }

    /*POST
     */
    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $newUser = new User();
        $newUser->password = bcrypt($request->password);
        $newUser->email = $request->email;
        $newUser->name = $request->name;

        $newUser->save();

        return redirect('/admin')->with('toast_success', 'Registered successfully');

    }
    
    /*GET
     */
    public function loginForm()
    {
        return view('auth.login');
    }

    /*POST
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            ])
        ){
        return redirect('/home')->with('toast_success', 'Logged in');
        }

        return redirect('/admin')->with('toast_error', 'Incorrect details try again!');
    }

    /*GET
     */
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/admin');
}
}