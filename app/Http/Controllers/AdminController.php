<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class AdminController extends Controller
{
    public function index()
    {

        return view('admin.login_admin');
    }
    public function dashboard()
    {

        return view('admin.dashboard');
    }
    public function loginadmin(Request $request)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'password' => ['required']
        ]);

        if (!auth()->attempt($attributes)) {
            //return back()->withInput()->withErrors(['fail'=> 'Your provided credentials could not be verified']); - option 1
            throw ValidationException::withMessages(['fail' => 'Your provided credentials could not be verified']);
        }

        session()->regenerate();
        return redirect('/dashboard')->with('success', 'You have succesfully logged in.');
        // return redirect()->intended('dashboard');
    
    }
    public function show()
    {

        return view('admin.register_admin');
    }
    public function register()
    {
        //var_dump(request()->all());
        $attributes = request()->validate([
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'min:7', 'max:255']
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
    
    
    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success');
    }
}
