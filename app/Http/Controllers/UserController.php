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
            'phonenumber' => "required",
            'email' => 'required',
            'password' => 'required',
        ]);

        $user= new User();
        $user->name= $request['name'];
        $user->name= $request['phonenumber'];
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
            'email' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/fiori'); 
        } else {
            return back()->withErrors(['error' => 'Invalid email or password.']); 
        }
    }

    public function updateProfile(Request $request) {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required' . $user->id,
            'password' => 'required',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        $user->save();
    }
}
