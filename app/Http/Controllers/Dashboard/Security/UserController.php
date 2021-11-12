<?php

namespace App\Http\Controllers\Dashboard\Security;

use App\Http\Controllers\Controller;
use App\Models\Security\User;
use App\Models\Security\Role;
use App\Http\Requests\UserRequest;
use Session;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function showFormCreateUser() {
        $roles = Role::all()->where("name", "!=", "OWNER");
        return view('dashboard.security.CreateUser', compact("roles"));
    }

    public function CreateUser(UserRequest $request) {
        $user['idnumber'] = $request->idnumber;
        $user['firstname'] = $request->firstname;
        $user['secondname'] = $request->secondname;
        $user['firstlastname'] = $request->firstlastname;
        $user['secondlastname'] = $request->secondlastname;
        $user['phonenumber'] = $request->phonenumber;
        $user['role_id'] = $request->role;
        $user['email'] = $request->email;
        $user['password'] = bcrypt($request->password);
        $user['created_by'] = auth()->id();
        $user['updated_by'] = auth()->id();
        User::create($user);

        Session::flash('usuariocreado', 'El usuario fue registrado correctamente');
        return redirect ("create-user");
    }

    public function showFormEditUser() {
        $users = User::all()->where("role_id", "!=", 1);
        return view('dashboard.security.EditUser', compact("users"));
    }

    public function activateUser($id) {
        $user = User::findOrFail($id);
        $upd["active"] = 1; //true
        $user->update($upd);
        Session::flash('usuarioactivado', 'El usuario ' . ' ' . $user->names . ' ' . $user->lastnames . ' fue activado correctamente');
        return redirect("modify-user");
    }

    public function inactivateUser($id) {
        $user = User::findOrFail($id);
        $upd["active"] = 0; //false
        $user->update($upd);
        Session::flash('usuarioinactivado', 'El usuario ' . ' ' . $user->names . ' ' . $user->lastnames . ' fue inactivado correctamente');
        return redirect("modify-user");
    }

}
