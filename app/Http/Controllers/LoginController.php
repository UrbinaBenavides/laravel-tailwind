<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(Request $request){
        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(!Auth::attempt($request->only('username', 'password'),$request->remember)){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        
        return redirect()->route('posts.index', Auth::user()->username);
    }
}
