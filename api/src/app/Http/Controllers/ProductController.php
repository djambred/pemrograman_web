<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::connection('mysql')->table('products')->get();
        return response()->json($product);
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
            'name' => 'required|string',
            'price' => 'required|string',
            'qty' => 'required|string',
        ]);

        $product = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'qty' => $request->input('qty'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $id = DB::connection('mysql')->table('products')->insertGetId($product);
        $data = DB::connection('mysql')->table('products')->where('id', $id)->first();

        $response = [
            'success' => True,
            'message' => 'Product Created With Name : ' . $data->name,
            'product' => $data
        ];

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::connection('mysql')->table('products')->where('id', $id)->first();
        $responseTrue = [
            'success' => True,
            'message' => 'Product Founded',
            'data' => $data
        ];

        $responseFalse = [
            'success' => False,
            'message' => 'Product Not Found',
        ];

        if(is_null($data)){
            return response()->json($responseFalse, 404);
        } 
        
        return response()->json($responseTrue, 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|string',
            'qty' => 'required|string',
        ]);
        $data = DB::connection('mysql')->table('products')->where('id', $id)->first();
        $responseFalse = [
            'success' => False,
            'message' => 'Product Not Found',
        ];
        if(is_null($data)){
            return response()->json($responseFalse, 404);
        } 
        $updateData = [
            'name'=>$request->input('name', $data->name),
            'price'=>$request->input('price', $data->name),
            'qty'=>$request->input('qty', $data->name),
            'updated_at' => Carbon::now()
        ];
        DB::connection('mysql')->table('products')->where('id', $id)->update($updateData);
        $dataUpdate = DB::connection('mysql')->table('products')->where('id', $id)->first();
        $responseTrue = [
            'success' => True,
            'message' => 'Product Updated',
            'data' => $dataUpdate
        ];
        return response()->json($responseTrue, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::connection('mysql')->table('products')->where('id', $id)->first();
        $responseTrue = [
            'success' => True,
            'message' => 'Product Deleted',
        ];

        $responseFalse = [
            'success' => False,
            'message' => 'Product Not Found',
        ];

        if(is_null($data)){
            return response()->json($responseFalse, 404);
        } 
        
        DB::connection('mysql')->table('products')->where('id', $id)->delete();
        return response()->json($responseTrue, 201);
    }
}
