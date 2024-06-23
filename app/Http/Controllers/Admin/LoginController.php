<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index(Request $request)
    {
        
        $input = $request->only(['email', 'password']);
        
        if(Auth::check()){
            
            return redirect('/admin');
            
        }
        
        if($request->method() === 'POST'){
            
            
            
            if(Auth::attempt($input)){
                
                $request->session()->regenerate();
                
                return redirect('/admin')->with('info', '����� ����������, ������');
                
                
            }
            
            return redirect('/login')->with('info', '�������� �������');
            
        }
        return view('admin.login');
    }
    
    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
    
}
