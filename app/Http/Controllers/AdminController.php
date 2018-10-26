<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Author;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }
    
    public function getLogout() 
    {
        Auth::logout();
        
        return redirect()->route('index');    
    }
    
    public function getDashboard() 
    {
        if (!Auth::check()) {
            return redirect()->back();
        }
        
        $authors = Author::all();
        
        return view('admin.dashboard', ['authors' => $authors]);    
    }
    
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]); 
        
        $credentials = $request->only('name', 'password');
        
        //if (!Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with(['fail' => 'Could not sign you in!']);
        }       
        
        return redirect()->route('admin.dashboard');
    }
}