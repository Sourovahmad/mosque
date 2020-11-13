<?php

namespace App\Http\Controllers;

use App\donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('donation.index');
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
        
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo');
        		
        $amount = $request->amount;
        $currency= $request->currency;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Donation for MMC',
			'amount' => $amount,
			'currency' => $currency,
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('donation.checkout',compact('intent','amount','currency'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(donation $donation)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(donation $donation)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donation $donation)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(donation $donation)
    {
        return abort(404);
    }
    public function success(){
        return "success";
    }
}
