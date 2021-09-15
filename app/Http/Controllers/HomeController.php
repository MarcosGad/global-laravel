<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_jobs; 
use App\roles; 
use App\dataUser;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->user) {
           return view('dashuser');
        }elseif(auth()->user()->admin){
            return view('admin.index');
        }
        elseif(auth()->user()->company){
            return view('company.index');
        }else{
            return view('yourData.create')->with('typeJobs',type_jobs::all())
                                          ->with('roles',roles::all())
                                          ->with('dataUser',dataUser::all()->where('user_id',Auth::id()));
        }
    }
}
