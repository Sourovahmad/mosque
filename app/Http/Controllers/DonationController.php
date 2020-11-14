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

         \Stripe\Stripe::setApiKey('sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo');
     
         $stripe = new \Stripe\StripeClient(
        'sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo'
      );

      
    //    $a= \Stripe\Balance::retrieve();
    //    return $a;




    //    $stripe = new \Stripe\StripeClient("sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo");

    //    $customers = $stripe->customers->all([
    //     'limit' => 3,
    //   ]);
    //    return $customers;



    // $stripe = new \Stripe\StripeClient("sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo");
    // $customer = $stripe->customers->create();
    // echo $customer->getLastResponse()->headers["Request-Id"];
   

    // $stripe = new \Stripe\StripeClient(
    //     'sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo'
    //   );
    // $t=  $stripe->balanceTransactions->retrieve(
    //     'txn_1HnK6RLtX3QocVixn7XBWVf0',
    //     []
    //   );



    // return $t;

    // $stripe = new \Stripe\StripeClient(
    //     'sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo'
    //   );
    //   return  $stripe->balanceTransactions->all(['limit' => 3]);

    // $stripe = new \Stripe\StripeClient(
    //     'sk_test_51Hl3M4LtX3QocVixJGQqsrEysAwfyQlm2dYD5WJbG6ns2zFbD71UjPBBxUGNz8kEe2lOQpcNhvIIQjGR0mUvQpjj00oXrXAZvo'
    //   );
    // return  $stripe->paymentIntents->retrieve(
    //     'pi_1HnQwrLtX3QocVixhzY5UXwP',
    //     []
    //   );

// pi_1HnR19LtX3QocVixHvbUS8uL_secret_QtaExCssC4fXU3EsvzIrcReIM 

      $intent = 'pi_1HnR19LtX3QocVixHvbUS8uL_secret_QtaExCssC4fXU3EsvzIrcReIM';
      $amount=500;
      $currency="usd";

    
      
		return view('donation.checkout',compact('intent','amount','currency'));

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
            'setup_future_usage' => 'on_session',
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
