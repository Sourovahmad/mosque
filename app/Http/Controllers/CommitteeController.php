<?php

namespace App\Http\Controllers;

use App\committee;
use App\designation;
use App\memberType;
use App\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isNull;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sessionId =1;
        $memberTypeId=  0;
        if(! is_null($request->member_type)){
            $memberTypeId=$request->member_type;
        }
        
        if(! is_null($request->session_id)){
            $sessionId=$request->session_id;
        }
        $member_types =memberType::all();
        $sessions = session::all();
        $designations = designation::all();
        if($memberTypeId ==3){
            $committees= committee::where('member_type',$memberTypeId)->where('session_id',$sessionId)-> orderby('position')->get();
        }
        elseif($memberTypeId ==0){
            $committees= committee:: orderby('position')->get();
        }
        else{
            $committees= committee::where('member_type',$memberTypeId)-> orderby('position')->get();
            
        }
        return view('admin.committee.index',compact('committees','designations','member_types','sessions','memberTypeId','sessionId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member_types =memberType::all();
        $sessions = session::all();
        $designations = designation::all();
        return view('admin.committee.create',compact('member_types','sessions','designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $committee =new committee;
        $committee->name= $request->name;
        $committee->designation_id= $request->designation_id;
        $committee->member_type= $request->member_type;
        $committee->phone= $request->phone;
        $committee->position= 99999;
        if(!is_null($request->session_id)){
            $committee->session_id= $request->session_id;
        }
        $committee->save();
        return redirect(route('admin.committee.index'))->withSuccess(['Member Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show(committee $committee)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function edit(committee $committee)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, committee $committee)
    { 
         $committee->name= $request->name;
        $committee->designation_id= $request->designation_id;
        $committee->phone= $request->phone;

        $committee->save();
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(committee $committee)
    {
        $committee->delete();
        return Redirect::back()->withErrors(["Item Deleted" ]);
    }

    
    public function position(Request $request)
    {
        $committees= committee::all();
        foreach($committees as $committee){
            if(!is_null($request[$committee->id])){
                $committee->position = $request[$committee->id];
                $committee->save();
            }
        }
    }




    public function frontendView()
    {
   
    $committees = committee::all();
    return view('committee.index',compact('committees'));



    }


    
    public function frontendViewTwo($type_id)
    {
    if($type_id < 1){
    $committees = committee::all();
    return view('committee.index',compact('committees'));
 }

      $memberType = memberType::find($type_id); 
      $TypeName =  $memberType->name;
   
      $committees = committee::whereIn('member_type',  $memberType)->get();
       
     
       return view('committee.index',compact('committees','TypeName'));


    }

    public function executive()
    {
        $allSessions = session::all();
        $sessions=[];
        foreach($allSessions as $s){
            $sessions[$s->id] = $s->name;
        }

        $committee = committee::all();
       
        $committeies = $committee->groupBy('session_id');
   
       return view('committee.executive',compact('committeies','sessions'));


    }

    // public function executiveFilter($id)
    // {

    //     return $id;
    //     $sessions = session::all();
    //     $memberType = memberType::find($id);

    //     $committees = committee::whereIn('member_type',  $memberType)->get();

    //    return view('committee.executive',compact('committees','sessions'));


    // }
    
}
