<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a registration view.
     */
    public function registration()
    {
        return view('auth.registration');
    }


    public function registration_processing(Request $request)
    {
        // dd($request->all());
        // validation
        $validation = Validator::make($request->all(), [
            'name'          => 'required|string|max:255',
            'phone_number'  => 'required|string|max:15|unique:users,phone_number',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|string|min:8|confirmed',
        ]);

        // error handl
        if ($validation->fails()) {
            notify()->error('Sorry! Registration Faild, Please enter your valid Information.');
            return redirect()->back()->withErrors($validation)->withInput();
        }

        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => $request->password,
            'phone_number'  => $request->phone_number,
        ]);

        // Success notify
        notify()->success('Congratulation! Registration was Successfully.');
        return redirect()->route('login');
    }

    /**
     * Display a login view.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Processing login user.
     */
    public function processing(Request $request)
    {
        // validation
        $validation = Validator::make($request->all(), [
            'email'         => 'required|email',
            'password'      => 'required',
        ]);

        // error handle
        if ($validation->fails()) {
            notify()->error('Sorry! Login Faild, Please enter your valid username and password.');
            return redirect()->back()->withErrors($validation)->withInput();
        }

        // remove token
        $login_data = $request->except('_token');

        // attempt
        if (Auth::attempt($login_data)) {
            notify()->success('Congratulation! Login Successfully.');
            return redirect()->route('Home');
        }

        // redirect login page
        notify()->error('Sorry! Login Faild, Please try again.');
        return redirect()->back();
    }

    /**
     * Logout User process.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
