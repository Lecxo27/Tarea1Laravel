<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

            return view('auth.register');
        
    }

    public function store(Request $request){

            // dd($request);

            // Validadciones

            $this->validate($request, [
                'name' => 'required|max:5',
                'username' => 'required|min:3|max:20',
                'email' => 'required|max:100|email',
                'password' => 'require|min:5|confirmed'

            ]);

           User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=> $request->password
           ]);

           auth()->attempt($request->only('email','password'));

           return redirect()->route('home.index');
        
    }
}
