<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function storeRegister(Request $request){
        $validate = $request->validate([
            'name'=>['required','string','max:20'],
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:6','string'],
            'role'=>['required','in:admin,cashier,user']
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role'=> $request->input('role')
        ]);
        Auth::user($user); // make current user login
        return $this->RedirectByRole($user);
    }
    private function RedirectByRole($user){
        if($user === 'admin'){
            return redirect()->route('admin.dashboard');
        }
        if($user === 'cashier'){
            return redirect()->route('cashier.dashboard');
        }
        return redirect()->route('user.dashboard');
    }
    public function login(){
        return view('auth.login');
    }
    public function storeLogin(Request $request){
        $validate = $request->validate([
            'email' => ['required'],
            'password' => ['required','min:6']
        ]);
        $userLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($userLogin)){
            $request->session()->regenerate();
            return $this->RedirectByRole(Auth::user());//admin user cashier
        }
        return back()->withErrors([
            'message' => 'email and password wrong ?'
        ]);
    }
}
