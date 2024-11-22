<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use App\Http\Middleware\GuestMiddleware;

class RegisterController extends Controller
{
 

    public function showRegistrationForm()
    {
        $roles = Role::all();
        return view('auth.register',compact('roles'));
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
       
        $user = $this->create($request->all());

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_id' => ['required', 'exists:roles,id'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
    }

}
