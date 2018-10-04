<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\Count;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(strtolower($request->input('name'))=='all'){
            
            $patients= Patient::orderBy('fullname',$request->input('sort'))->get();
            //session(['patients' => $patients]);
            
            $count= new Count;
            $count->search=1;
            $count->save();
            return redirect('/public/SearchForPatient')->with('patients', $patients);;
        }
        else{
            $patients =Patient::where('fullname','like','%'.$request->input('name').'%')
            ->orderBy('fullname',$request->input('sort'))->get();
            
            $count= new Count;
            $count->search=1;
            $count->save();
            return redirect('/public/SearchForPatient')->with('patients', $patients);
        }
    
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'name'=>'required',
                'disease'=>'required',
                ]);
        $patient = new Patient;
        
        $patient->fullname  =$request->input('name') ;
        $patient->disease   =$request->input('disease') ;
        $patient->state     =$request->input('state') ;
        $patient->birthdate =$request->input('year').'-'.$request->input('month') ;
        $patient->users_id  =$request->input('user_id');
        
        $patient->save();
        
        $count= new Count;
        $count->patient=1;
        $count->save();
        
        return redirect('/public/AddNewPatient')->with('success','Thank you new Patient add');
        
    }

}
