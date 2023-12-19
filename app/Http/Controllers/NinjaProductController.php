<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NinjaProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {   
    //    $products = Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = New Product();

        $product->thumnail_image   =   $request->ninja_thumnail_image;
        $product->product_image_1  =   $request->carousel_image_1;
        $product->product_image_2  =   $request->carousel_image_2;
        $product->product_image_3  =   $request->carousel_image_3;
        $product->product_title    =   $request->ninja_product_title;
        $product->product_detail   =   $request->ninja_product_detail;
        $product->shiping_detail   =   $request->ninja_product_shiping_detail;
        $product->product_price    =   $request->ninja_product_price;
        $product->shiping_cost     =   $request->ninja_product_shiping_price;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Form.Product.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
