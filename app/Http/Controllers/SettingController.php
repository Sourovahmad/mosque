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
        $a = '[{
            "componentDetails":{
                "title":"Event Category List",
                "editTitle":"Edit Event Category"
            },
            "routes":{
                "create":{
                    "name":"event-category.store",
                    "link":"event-category"
                },
                "update":{
                    "name":"event-category.update",
                    "link":"event-category"
                },
                "delete":{
                    "name":"event-category.destroy",
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
               "name":"event_count",
               "title":"Event Count",
               "database_name":"event_count"
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
