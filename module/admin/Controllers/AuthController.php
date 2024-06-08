<?php

namespace Module\Admin\Controllers;


use Illuminate\Http\Request;

class AuthController extends AdminBaseController
{
    public $view_path = "auth";

    public function __construct()
    {

    }

    public function showLoginForm()
    {
        return view(parent::__loadView('login'));
    }

    public function login(Request $request)
    {

        $remember = isset($remember->remember_me) ? true : false;

        $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

        $credentials = $request->only(['email', 'password']);
        $credentials['token_verified'] = 1;

        if ($this->guard()->attempt($credentials, $remember)) {

            return redirect()->route('admin.dashboard.index');

        } else {

            return redirect()->back()->with('error', 'Email or password does not match.');
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('admin.login.index');
    }

    public function guard()
    {
        return auth('admin');
    }
}
