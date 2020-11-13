<?php

namespace App\Http\Controllers;

use App\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // {\n                \n                \"position\":11,\n    \n                \"create\":\"2\",\n                \"read\":\"1\",\n                \"update\":\"3\",\n                \"require\":\"1\",\n    \n                \"name\":\"product\",\n                \"input_type\" : \"dropDown\",\n                \"database_name\":\"product_id\",  \n                \"title\":\"Product\",\n                \"data\" : \"products\"\n            }
        $a = '[{
            "componentDetails":{
                "title":"Sessions List",
                "editTitle":"Edit Session"
            },
            "routes":{
                "create":{
                    "name":"admin.sessions.store",
                    "link":"admin/sessions"
                },
                "update":{
                    "name":"admin.sessions.update",
                    "link":"admin/sessions"
                },
                "delete":{
                    "name":"admin.sessions.destroy",
                    "link":"admin/sessions"
                }
            },
            "fieldList":[{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"text",
               "name":"name",
               "title":"Name",
    
    
               "database_name":"name"
            },{
                    
                "position":111,
    
                "create":"1",
                "read":"1",
                "update":"1",
                "require":"0",
    
               "input_type":"text",
               "name":"description",
               "title":"Description",
    
    
               "database_name":"description"
            },{
                    
                "position":111,
    
                "create":"3",
                "read":"1",
                "update":"3",
                "require":"0",
    
               "input_type":"text",
               "name":"member",
               "title":"Member Count",
    
    
               "database_name":"member"
            }
            ]
        }]' ;


        
        // $setting =new setting;
        // $setting->setting = json_encode( $a);
        // $setting->table_name = 'sessions';
        // $setting->save();
        // return  "Success";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting $setting)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        return abort(404);
    }
}
