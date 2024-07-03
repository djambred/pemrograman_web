<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Order::with(array('order_item'=>function($query){
        //     $query->select();
        // }))->get();
        // if(!$data) {
        //     return response()->json([
        //         "message" => "Data Not Found"
        //     ]);
        // }else{
        //     return response()->json([
        //         "message" => "Success retrieve data",
        //         "status" => true,
        //         "data" => $data
        //     ]);    
        // }
        $data = Order::with(array('orderitem'=>function($query){
            $query->select();
        }))->get();
        if(!$data) {
            return response()->json([
                "message" => "Data Not Found"
            ]);
        }

        Log::info('Showing all order');

        return response()->json([
            "message" => "Success retrieve data",
            "status" => true,
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'data.attributes.user_id' => 'required|exists:customers,id'
        ]);
        
        $order = new Order();
        $order->user_id = $request->input('data.attributes.user_id');
        $order->status = "created";
        $order->save();

        $order_detail = $request->input('data.attributes.order_detail');

        for ($i=0; $i < count($order_detail); $i++) { 
            $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $request->input('data.attributes.order_detail.'.$i.'.product_id');
            $order_item->quantity = $request->input('data.attributes.order_detail.'.$i.'.quantity');
            $order->orderitem()->save($order_item);
        }

        Log::info('Adding order');

        return response()->json([
            "message" => "Success Added",
            "status" => true,
            "data" => [
                "attributes" => $order
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findId = Order::find($id);
        $data = Order::where('id', $id)->with(array('orderitem'=>function($query){
            $query->select();
        }))->get();
        if(!$findId) {
            return response()->json([
                "message" => "Parameter Not Found"
            ]);
        }

        Log::info('Showing order with post comment by id');

        return response()->json([
            "message" => "Success retrieve data",
            "status" => true,
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'data.attributes.user_id' => 'required|exists:customers,id'
        ]);
        
        $order = Order::find($id);
        if ($order) {
            $order->user_id = $request->input('data.attributes.user_id');
            $order->status = "created";
            $order->save();

            $order_detail = $request->input('data.attributes.order_detail');

            for ($i=0; $i < count($order_detail); $i++) { 
                $order_item = OrderItem::where('order_id', $id)->first();
                $order_item->product_id = $request->input('data.attributes.order_detail.'.$i.'.product_id');
                $order_item->quantity = $request->input('data.attributes.order_detail.'.$i.'.quantity');
                $order->orderitem()->save($order_item);
            }

            Log::info('Updating order by id');

            return response()->json([
                "message" => "Success Updated",
                "status" => true,
                "data" => [
                    "attributes" => $order
                ]
            ]);        
        }else {
            return response()->json([
                "message" => "Parameter Not Found"
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if($order) {
            $order->delete();

            $order_item = OrderItem::where('order_id', $id)->delete();

            Log::info('Deleting order by id');

            return response()->json([
                "message" => "Success Deleted",
                "status" => true,
                "data" => [
                    "attributes" => $order
                ]
            ]);   
        }else {
            return response()->json([
                "message" => "Parameter Not Found"
            ]);
        }
    }
}
