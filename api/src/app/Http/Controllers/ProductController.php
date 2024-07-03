<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Product::get();
        // if(!$data) {
        //     return response()->json(
        //         [
        //             'success' => false,
        //             'message' => 'Produt Not Found'
        //         ]
        //         );
        //     } else {
        //      return response()->json(
        //         [
        //             'success' => true,
        //             'message' => 'Success Retrive Data',
        //             'data' => $data
        //         ]
        //      ) ; 
        // }
        $data = Product::all();
        if(!$data) {
            return response()->json([
                "message" => "Data Not Found"
            ]);
        }

        Log::info('Showing all product');

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
            'data.attributes.name' => 'required',
            'data.attributes.price' => 'required'
        ]);
        
        $data = new Product();
        $data->name = $request->input('data.attributes.name');
        $data->price = $request->input('data.attributes.price');
        $data->save();

        Log::info('Adding product');

        return response()->json([
            "message" => "Success Added",
            "status" => true,
            "data" => [
                "attributes" => $data
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        if(!$data) {
            return response()->json([
                "message" => "Parameter Not Found"
            ]);
        }

        Log::info('Showing product by id');

        return response()->json([
            "message" => "Success retrieve data",
            "status" => true,
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'data.attributes.name' => 'required',
            'data.attributes.price' => 'required'
        ]);
        
        $data = Product::find($id);
        if ($data) {
            $data->name = $request->input('data.attributes.name');
            $data->price = $request->input('data.attributes.price');
            $data->save();

            Log::info('Updating product by id');

            return response()->json([
                "message" => "Success Updated",
                "status" => true,
                "data" => [
                    "attributes" => $data
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        if($data) {
            $data->delete();

            Log::info('Deleting product by id');

            return response()->json([
                "message" => "Success Deleted",
                "status" => true,
                "data" => [
                    "attributes" => $data
                ]
            ]);   
        }else {
            return response()->json([
                "message" => "Parameter Not Found"
            ]);
        }
    }
}
