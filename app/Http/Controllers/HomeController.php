<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Navbar;
use App\Count;

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
     * @return \Illuminate\Http\Response
     */
    public function index($public)
    {
        $patients = Session('patients');
        $nav=Navbar::all();
        $iraq_state=['Baghdad','Basrah','Arbil','Anbar','Babylon','Dohuk','Qadisiyah','Diyala','Muthana',
        'Theqar','Sulaimaniya','Salaheddin','Kirkuk','Karbala','Maysan','Najaf','Nineweh','Wassit'];
       
        return view('public/'.$public)->with('nav',$nav)->with('iraq_state',$iraq_state)->with('patients',$patients);
    }
    
    public function admins($admin)
    {
        $users = Session('user');
        
        $nav=Navbar::where('visb','>',1)->get();
        
        $a= DB::table('counts')->sum('admin');
        $u= DB::table('counts')->sum('user');
        $p= DB::table('counts')->sum('patient');
        $s= DB::table('counts')->sum('search');
        $counts=['admin'=>$a,'user'=>$u,'patient'=>$p,'search'=>$s];
       
        return view('/admin/'.$admin)->with('nav',$nav)->with('counts',$counts)->with('users',$users);
    }
    

}
