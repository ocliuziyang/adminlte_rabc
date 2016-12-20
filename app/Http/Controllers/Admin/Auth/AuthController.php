<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    //
    function __construct()
    {
        //游客访问
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request) {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //登录成功 从定向
            return redirect('admin/index');
        }

        return redirect()->back();
    }


    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return view('admin.auth.login');
    }

}
