<?php

namespace App\Http\Controllers;

use App\dashboard;
use App\donationDaily;
use App\donationMonthly;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $YearStart = Carbon::now()->format('Y-01-01');
        $YearEnd = Carbon::now()->format('Y-12-31');

        $monthStart = Carbon::now()->format('Y-m-01');
        $monthEnd = Carbon::now()->format('Y-m-31');
        


        $monthlyDonationsbar=$this->monthlyDonationsbar($YearStart,$YearEnd);
        $monthlyDonationspie=$this->monthlyDonationspie($YearStart,$YearEnd);
        $dailyDonationsbar=$this->dailyDonationsbar($monthStart,$monthEnd);


        
        $dailyDonationsbar = json_decode(json_encode($dailyDonationsbar), true);
        $monthlyDonationsbar = json_decode(json_encode($monthlyDonationsbar), true);
        $monthlyDonationspie = json_decode(json_encode($monthlyDonationspie), true);
        return view('admin.index',compact('monthlyDonationsbar','monthlyDonationspie','dailyDonationsbar'));
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
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        return abort(404);
    }

    public function monthlyDonationsbar($YearStart,$YearEnd){

        $months = array();
        $donations = array();
        $monthlyDonations = donationMonthly::where('month', '>=', $YearStart)->where('month', '<=', $YearEnd)->get();

        foreach ($monthlyDonations as $monthlyDonation) {
            $month = Carbon::parse($monthlyDonation->month)->format('M,Y');
            array_push($months, $month);
            array_push($donations, $monthlyDonation->amount);
        }
        $donationData = [
            'id' => 'monthlyDonationbar',
            "lebels" => $months,
            "datasets" => [
                [
                    "label" => "Monthly Donation",
                    "data" => $donations,
                    "backgroundColor" => "#FF0000",
                    "borderColor" =>     "#FF0000",
                    "fill" => false
                    
                ],
            ]
        ];
        return $donationData;

    }


    public function dailyDonationsbar($monthStart,$monthEnd){

        $days = array();
        $donations = array();
        $dailyDonations = donationDaily::where('date', '>=', $monthStart)->where('date', '<=', $monthEnd)->get();

        foreach ($dailyDonations as $dailyDonation) {
            $date = Carbon::parse($dailyDonation->date)->format('d M, Y');
            array_push($days, $date);
            array_push($donations, $dailyDonation->amount);
        }
        $donationData = [
            'id' => 'dailyDonationbar',
            "lebels" => $days,
            "datasets" => [
                [
                    "label" => "Monthly Donation",
                    "data" => $donations,
                    "backgroundColor" => "#FF0000",
                    "borderColor" =>     "#FF0000",
                    "fill" => false
                    
                ],
            ]
        ];
        return $donationData;

    }



    public function monthlyDonationspie($YearStart,$YearEnd){

        $months = array();
        $donations = array();
        $colors = array('#DC143C','#FF4500','#FFFF00','#FF00FF','#2F4F4F','#00FA9A','#008000','#00FFFF','#4682B4','#0000FF','#808080','#800000');
        $monthlyDonations = donationMonthly::where('month', '>=', $YearStart)->where('month', '<=', $YearEnd)->get();

        foreach ($monthlyDonations as $monthlyDonation) {
            $month = Carbon::parse($monthlyDonation->month)->format('M,Y');
            array_push($months, $month);
            array_push($donations, $monthlyDonation->amount);
        }
        $donationData = [
            'id' => 'monthlyDonationbPie',
            "lebels" => $months,
            "datasets" => [
                [
                    "label" => "Monthly Donation",
                    "data" => $donations,
                    "backgroundColor" => $colors,
                    "fill" => false
                    
                ],
            ]
        ];
        return $donationData;

    }



    
}
