<?php

namespace App\Http\Controllers;

use App\role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = role::all();
        $users = User::where('id','>',1000)->orderBy('id','desc')->get();
        return view('admin.user.index',compact('roles','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(strlen($request->password)<6){
            return Redirect::back()->withErrors(["Password Should be at least 6 character"]);
        }

        $testUser = User::where('email',$request->email)->first();
        if(!is_null($testUser)){
            return Redirect::back()->withErrors(["Email Already Taken"]);
        }


        $user = new User;

        $user->role_id=$request->role_id;    
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=  Hash::make($request->password);
        $user->save();
        
        return  Redirect::back()->withSuccess(['User Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if(strlen($request->password)<6){
            return Redirect::back()->withErrors(["Password Should be at least 6 character"]);
        }
        if($user->id== 1 || $user->id==2){
            return Redirect::back()->withErrors(["Can't change Default User"]);
        }
        else
        {
            $user->password=  Hash::make($request->password);
            $user ->save();
            return Redirect::back()->withSuccess(["Password Changed"]);
        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->id== 1 || $user->id==2){
            return Redirect::back()->withErrors(["Can't delete Default User"]);
        }
        else
        {
            $user->delete();
            return Redirect::back()->withErrors(["User Deleted"]);
        }
    }
}
