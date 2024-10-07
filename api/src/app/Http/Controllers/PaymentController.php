<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Costumer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Midtrans\Transaction;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Payment::all();
        if(!$data) {
            return response()->json([
                "success" => false,
                "message" => "Data Not Found"
            ]);
        }

        Log::info('Showing all payment');

        return response()->json([
            "success" => true,
            "message" => "Success retrieve data",
            "data" => $data
        ]);
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
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'data.attributes.payment_type' => 'required',
    //         'data.attributes.gross_amount' => 'required',
    //         // 'data.attributes.bank' => 'required',
    //         'data.attributes.order_id' => 'required|exists:orders,id'
    //     ]);
        
    //     $data = new Payment();
    //     $data->payment_type = $request->input('data.attributes.payment_type');
    //     $data->gross_amount = $request->input('data.attributes.gross_amount');
    //     // $data->bank = $request->input('data.attributes.bank');
    //     $data->order_id = $request->input('data.attributes.order_id');
    //     $data->transaction_id = Str::random(10);
    //     $data->transaction_time = Carbon::now()->toDateTimeString();
    //     $data->transaction_status = "created";
    //     $data->save();

    //     Log::info('Adding payment');
        
    //     $item_list = array();
    //     $amount = 0;
    //     Config::$serverKey = 'SB-Mid-server-rQ_LksewCMtmTttkXsS66rB0';
    //     if (!isset(Config::$serverKey)) {
    //         return "Please set your payment server key";
    //     }
    //     Config::$isSanitized = true;

    //     // Enable 3D-Secure
    //     Config::$is3ds = true;
        
    //     $orderitem = OrderItem::where('order_id', $data->order_id)->with(array('product'=>function($query){
    //         $query->select();
    //     }))->get();
    //     $array_item = [];
    //     for ($i=0; $i < count($orderitem); $i++) { 
    //         $array_item['id'] = $orderitem[$i]['product']['id'];
    //         $array_item['price'] = $orderitem[$i]['product']['price'];
    //         $array_item['quantity'] = $orderitem[$i]['quantity'];
    //         $array_item['name'] = $orderitem[$i]['product']['name'];
    //     }

    //     // Required
    //     $item_details[] = $array_item;

    //     $transaction_details = array(
    //         'order_id' => $data->order_id,
    //         'gross_amount' => $data->gross_amount, // no decimal allowed for creditcard
    //     );

    //     $order = Order::find($data->order_id);
    //     $customer = Costumer::find($order->costumer_id);

    //     //dd($customer);

    //     // Optional
    //     $customer_details = array(
    //         'full_name' => $customer->full_name,
    //         'username' => $customer->username,
    //     );

    //     // Optional, remove this to display all available payment methods
    //     $enable_payments = array($data->payment_type);

    //     // Fill transaction details
    //     $transaction = array(
    //         'enabled_payments' => $enable_payments,
    //         'transaction_details' => $transaction_details,
    //         'customer_details' => $customer_details,
    //         'item_details' => $item_details,
    //     );
    //     // return $transaction;
    //     try {
    //         $snapToken = Snap::createTransaction($transaction);

    //         // return response()->json($snapToken);
    //         return response()->json([
    //             "message" => "Transaction added successfully",
    //             "status" => true,
    //             "results" => $snapToken,
    //             "data" => [
    //                 "attributes" => $data
    //             ]
    //         ]);
    //     } catch (\Exception $e) {
    //         dd($e);
    //         // return ['code' => 0 , 'message' => 'failed'];
    //         return response()->json([
    //             "message" => "failed",
    //             "status" => false,
    //             // "results" => $snapToken,
    //             // "data" => [
    //             //     "attributes" => $data
    //             // ]
    //         ]);
    //     }

    // }

    public function store(Request $request)
    {
        $this->validate($request, [
            'data.attributes.payment_type' => 'required',
            'data.attributes.gross_amount' => 'required',
            'data.attributes.order_id' => 'required|exists:orders,id'
        ]);
    
        $data = new Payment();
        $data->payment_type = $request->input('data.attributes.payment_type');
        //$data->gross_amount = $request->input('data.attributes.gross_amount');
        $data->order_id = $request->input('data.attributes.order_id');
        $data->transaction_id = Str::random(10);
        $data->transaction_time = Carbon::now()->toDateTimeString();
        $data->transaction_status = "pending"; // Set initial status based on Midtrans response
        $data->save();
    
        Log::info('Adding payment');
    
        // Retrieve order items
        $orderItems = OrderItem::where('order_id', $data->order_id)->with('product')->get();
    
        // Calculate total gross amount from order items
        $totalAmount = 0;
        foreach ($orderItems as $orderItem) {
            $totalAmount += $orderItem->product->price * $orderItem->quantity;
        }
        //dd($totalAmount);
        // Validate if calculated total matches the provided gross_amount
        if ($data->gross_amount != $totalAmount) {
            return response()->json([
                "message" => "Invalid payload: gross_amount does not match the sum of item_details",
                "status" => false
            ], 400);
        }
    
        $transactionDetails = [
            'order_id' => $data->order_id,
            'gross_amount' => $data->gross_amount
        ];
    
        $transaction = [
            'payment_type' => $data->payment_type,
            'transaction_details' => $transactionDetails,
            'bank_transfer' => [
                'bank' => 'bca' // Replace with actual bank from your request
            ]
            // Adjust according to your needs, e.g., 'bank_transfer' for specific bank transfers
        ];
    
        try {
            $response = Http::withHeaders([
                    'Authorization' => 'Basic ' . base64_encode('SB-Mid-server-rQ_LksewCMtmTttkXsS66rB0' . ':')
                ])
                ->post('https://api.sandbox.midtrans.com/v2/charge', $transaction);
    
            if ($response->successful()) {
                $responseData = $response->json();
    
                // Update payment record with transaction details from Midtrans response
                $data->transaction_id = $responseData['transaction_id'];
                $data->transaction_status = $responseData['transaction_status'];
                $data->save();
    
                return response()->json([
                    "message" => "Transaction added successfully",
                    "status" => true,
                    "results" => $responseData,
                    "data" => [
                        "attributes" => $data
                    ]
                ]);
            } else {
                return response()->json([
                    "message" => "Transaction failed",
                    "status" => false,
                    "results" => $response->json()
                ], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('Transaction failed: ' . $e->getMessage());
    
            return response()->json([
                "message" => "Transaction failed",
                "status" => false
            ], 500);
        }
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Payment::find($id);
        if(!$data) {
            return response()->json([
                "success" => false,
                "message" => "Parameter Not Found"
            ]);
        }

        Log::info('Showing payment by id');

        return response()->json([
            "success" => true,
            "message" => "Success retrieve data",
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Payment::getById($id);;
        $data = $data->data;
        $id_order = $data->order_id;
        Config::$serverKey = 'SB-Mid-server-rQ_LksewCMtmTttkXsS66rB0';
        if(!isset(Config::$serverKey))
        {
            return "Please set your payment server key";
        }

        Config::$isSanitized = true;
        Config::$is3ds = true;
        $url = "https://api.sandbox.midtrans.com/v4/". $id_order. "/status";
        $curl = curl_init("$url");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Basic ' . base64_encode(Config::$serverKey.':'),
            'Content-Type: application/json',
            'Accept: application/json',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $res = response()->json($response);

        return $this->update($res, $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update($data,$id)
    {
        $data = json_decode($data);
        $orders = Order::find($id);
        $orders->transaction_time = $data->transaction_time;
        $orders->transaction_status = $data->transaction_status;
        $orders->transaction_id = $data->transaction_id;
        $orders->save();

        return response()->json([
            "message" => "Transaction updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Payment::find($id);
        if($data) {
            $data->delete();

            Log::info('Deleting payment by id');

            return response()->json([
                "success" => true,
                "message" => "Transaction deleted successfully",
                "data" => [
                    "attributes" => $data
                ]
            ]);   
        }else {
            return response()->json([
                "success" => false,
                "message" => "Parameter Not Found"
            ]);
        }
    }

    public function midtransPush(Request $request)
    {
        $req = $request->all();
        $pay = Payment::where('order_id', $req['order_id'])->get();
        // return $pay;
        $pays = Payment::find($pay[0]->id);
        if(!$pay)
        {
            return response()->json([
                "messages"=> "Order id not found",
                "status"=>"error"
            ]);
        }
        $pays->transaction_time = $req['transaction_time'];
        $pays->transaction_status = $req['transaction_status'];
        $pays->transaction_id = $req['transaction_id'];
        if($pays->save())
        {
            return response()->json([
                "messages"=> "Transaction changes"
            ], 200);
        }
    }
}
