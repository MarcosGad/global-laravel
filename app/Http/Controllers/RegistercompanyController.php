<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegistercompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register()
    {
        return view('Company.register');
    }
    
    public function createCompany(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name' => ['required', 'string', 'max:255'],
        ]);
        
        $user = User::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'Country' => $request['Country'],
            'password' => Hash::make($request['password']),
            'company_name' => $request['company_name'],
        ]);
        
        $user->company = 1; 
        $user->save(); 
        auth()->login($user);
        return redirect()->route('home');
    }
}
