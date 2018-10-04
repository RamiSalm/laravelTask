<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Count;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input('admin')){
            
        $user =User::where('admin','=','1')->get();
        return redirect('/admin/DeleteUsers')->with('user',$user);
        }
        elseif($request->input('user')){
        $user =User::where('admin','=','0')->get();
        return redirect('/admin/DeleteUsers')->with('user',$user);
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
        $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
            
            $admin=new User;
            
            $admin->name    =$request->input('name');
            $admin->email   =$request->input('email');
            $admin->admin   =1;
            $admin->password=bcrypt($request->input('password'));
            
            $admin->save();
            
            $count= new Count;
            $count->admin=1;
            $count->save();
            
            return redirect('/admin/AddAdmin')->with('success','New Admin add ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($request->input('password'))){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
            ]);
            
            $admin=User::find($id);
            
            $admin->name    =$request->input('name');
            $admin->email   =$request->input('email');
            $admin->password=bcrypt($request->input('password'));
            
            $admin->save();
            return redirect('/admin/Profile')->with('success','information change with password ');
            
        }
        else{
             $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
            ]);
             
            $admin=User::find($id);
            
            $admin->name    =$request->input('name');
            $admin->email   =$request->input('email');
            
            $admin->save();
            return redirect('/admin/Profile')->with('success','information change BUT password not change ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::find($id);
            if($user->admin==1){
                $count= new Count;
                $count->admin=-1;
                $count->save(); 
            }elseif($user->admin==0){
                $count= new Count;
                $count->user=-1;
                $count->save();
            }
        $user->delete();
        
        return redirect('/admin/DeleteUsers')->with('success','1 Recorde delete');
    }
}
