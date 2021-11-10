<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Security\User;
use Session;

class LoginController extends Controller {

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin() {
        return view("dashboard.auth.login");
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->input('remember_me');
        if (Auth::attempt($credentials, $remember)) {
            request()->session()->regenerate();
            $user = User::findOrFail(auth()->id());
            if ($user["active"] == false) {
                $this->logout();
                Session::flash('msj', 'su usuario se encuentra inactivo, consulte al administrador');
                return redirect('login');
            }
            return redirect('/');
        } else {
            Session::flash('msj', 'estas credenciales no coinciden con nuestros registros');
            return redirect('login');
        }
    }

    public function logout() {
        $this->guard()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('./');
    }

    protected function guard() {
        return Auth::guard();
    }
}
