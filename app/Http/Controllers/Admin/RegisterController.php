<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController
{
    public function index(Request $request)
    {
        
        
        
        
        if(Auth::check()){
            
            return redirect('/admin');
            
        }
        
        
        // dump($request->all());
        
        if($request->method() === 'POST'){
            
            $validateData = $request->validate([
                
                'email'=> 'required|email',
                'password' => 'required',
                'name' => 'required',
                
            ]);
            
            
            $user = User::create($validateData);
            
            $data = $user->only(['email','password']);
            
            Auth::login($user);
            
            return view('admin.index');
            
        }
        
        
        return view('admin.register');
    }
    
}
