<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function storeRegister(Request $request){
        $validate = $request->validate([
            'name' => ['required','string','max:20'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','string','min:6'],
            'role' => ['required','in:admin,user,customer']
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
        ]);
        Auth::login($user); // make current user when 
        return $this->CheckRole(Auth::user($user));
    }
    public function login(){
        return view('auth.login');
    }
    public function storeLogin(Request $request){
        // try{}
        $validate = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:6']
        ]);
        
        $credentail = $request->only('email','password');

        if(Auth::attempt($credentail)){
            $request->session()->regenerate(); // random session id  
            return $this->CheckRole(Auth::user());
        }
        return back()->withErrors([
            'message' => 'email and password wrong'
        ]);
    }
    private function CheckRole($user){
            if($user->role == 'admin'){
                return redirect()->route('admin');
            }
            if($user->role == 'customer'){
                return redirect()->route('customer');
            }
            return redirect('dashboard');
    }
    public function logout(Request $request){
        Auth::logout(); // logout current user

        $request->session()->invalidate(); // clear session data and regenerate session id
        $request->session()->regenerateToken(); // regenerate CSRF/XSRF token

        Cookie::queue(Cookie::forget(config('session.cookie')));
        Cookie::queue(Cookie::forget('XSRF-TOKEN'));

        return redirect()->route('login');
    }
}
