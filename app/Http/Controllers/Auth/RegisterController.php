<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Security\User;
use App\Http\Requests\RegisterUserRequest;
//use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller {
    
    public function __construct() {
        $this->middleware('guest');
    }

    public function showDemoRegister() {
        return view("webpages.demo.auth.register");
    }
    
    public function showFormRegister($company) {
        return view("webpages.".$company.".auth.register");
    }

    public function register(RegisterUserRequest $request) {       
        
    $user['names'] = ucwords(strtolower(trim($request->names)));
    $user['lastnames'] = ucwords(strtolower(trim($request->lastnames)));
    $user['phonenumber'] = $request->phonenumber;
    $user['email'] = strtolower(trim($request->email));
    $user['role_id'] = 2;
    $user['active'] = true;
    $user['password'] = bcrypt($request->password);

        if (User::create($user)) {

            Session::flash('usercreate', 'El usuario fue registrado correctamente');
            return back();
        } else {
            Session::flash('usernocreate', 'El usuario no pudo ser registrado correctamente');
            return back();
        }
    }

}
