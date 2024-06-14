<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('signup');
    }

    public function signup(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user= new User();
        $user->name= $request['name'];
        $user->email= $request['email'];
        $user->password= $request['password'];

        $user->save();

        return redirect('/signin');
    }

    public function signinPage() {
        return view('signin');
    }

    public function signin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/fiori'); 
        } else {
            return back()->withErrors(['error' => 'Invalid email or password.']); 
        }
    }
}
