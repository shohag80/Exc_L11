<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function processing(Request $request)
    {
        // validation
        $validation = Validator::make($request->all(), [
            'email'         => 'required|email',
            'password'      => 'required',
        ]);

        // error handl
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
