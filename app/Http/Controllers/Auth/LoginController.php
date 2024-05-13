<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{

    
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|confirmed'
            ]
            );
              
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);
        
        return redirect('/home');

    }
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

       $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            
            return redirect('/home');

        }
        else{
            return back()->withErrors(['Invalid Credentials']);
        }
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Authentication successful
        //     return redirect()->intended('/home');
        // }
    
        // // Authentication failed
        // return back()->withErrors(['email' => 'Invalid email or password.']);

    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
