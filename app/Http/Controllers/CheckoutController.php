<?php

namespace App\Http\Controllers;

use App\Mail\facturemail;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;
use App\Order;

use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::count() <= 0) {
            return redirect()->route('games.index');
        }

        Stripe::setApiKey('sk_test_51IGZJHHvBQWV1bRVBOYCG634qYcruUjzsYERrGZOe31J2bBbmy4e0Lf64QLkY3CPE7EXNEwMw2vQ9VxZY0nL1A7E00eEgshbr3');

        $intent = PaymentIntent::create([
            'amount' => intval(Cart::total()*100),
            'currency' => 'eur'
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('checkout.index', [
            'clientSecret' => $clientSecret
        ]);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mail::to(Auth::user())->send(new facturemail());
        $data = $request->json()->all();

        $order = new Order();

        $order->payment_intent_id = $data['paymentIntent']['id'];
        $order->amount = $data['paymentIntent']['amount'];

        $order->payment_created_at = (new DateTime())
            ->setTimestamp($data['paymentIntent']['created'])
            ->format('Y-m-d H:i:s');

        $products = [];
        $i = 0;

        foreach (Cart::content() as $product) {
            $products['product_' . $i][] = $product->model->name;
            $products['product_' . $i][] = $product->model->price;
            $products['product_' . $i][] = $product->quantity;
            $products['product_' . $i][] = $product->code;
            $i += 1;
        }


        $order->products = json_encode($products);
        $order->user_id = Auth::user()->id;
        $order->save();

        if ($data['paymentIntent']['status'] == 'succeeded') {
            Cart::destroy();
            return response()->json(['success' => 'Payment Intent Succeeded']);
        } else {
            return response()->json(['success' => 'Payment Intent Not Succeeded']);
        }
    }

    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
