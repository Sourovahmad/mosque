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
                "title":"Event Category List",
                "editTitle":"Edit Event Category"
            },
            "routes":{
                "create":{
                    "name":"admin.event-category.store",
                    "link":"event-category"
                },
                "update":{
                    "name":"admin.event-category.update",
                    "link":"event-category"
                },
                "delete":{
                    "name":"event.event-category",
                    "link":"event-category"
                }
            },
            "fieldList":[{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"text",
               "name":"title",
               "title":"Title",
    
    
               "database_name":"title"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"date",
               "name":"date",
               "title":"Date",
    
    
               "database_name":"date"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"text",
               "name":"vanu",
               "title":"Vanu",
    
    
               "database_name":"vanu"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"time",
               "name":"start_time",
               "title":"Start Time",
    
    
               "database_name":"start_time"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"time",
               "name":"end_time",
               "title":"End Time",
    
    
               "database_name":"end_time"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"text",
               "name":"vanu",
               "title":"Vanu",
    
    
               "database_name":"vanu"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"text",
               "name":"vanu",
               "title":"Vanu",
    
    
               "database_name":"vanu"
            },{
                    
                "position":111,
    
                "create":"2",
                "read":"1",
                "update":"2",
                "require":"1",
    
               "input_type":"text",
               "name":"vanu",
               "title":"Vanu",
    
    
               "database_name":"vanu"
            }
            ]
        }]' ;


        
        // $setting =setting::find(1);
        // $setting->setting = json_encode( $a);
        // $setting->table_name = 'event_categories';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
