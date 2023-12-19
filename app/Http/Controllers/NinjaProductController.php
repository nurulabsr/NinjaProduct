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
        
        $request->validate([  //'regex:/^[a-zA-Z0-9$]+$/', 'regex:/^[a-zA-Z]+$/' , for image 'dimensions:max_width=1920,max_height=1080', 
            
            'ninja_thumnail_image' => ['required', 'max:2048', 'file', 'image', 'mimes:png,jpg', 'mimetypes:image/jpg,image/png', 'regex:/^(.*)(\.jpg|\.png)$/i'],
            'carousel_image_1' => ['required', 'max:2048', 'file', 'image', 'mimes:png,jpg', 'mimetypes:image/jpg,image/png', 'regex:/^(.*)(\.jpg|\.png)$/i'],
            'carousel_image_2' => ['required', 'max:2048', 'file', 'image', 'mimes:png,jpg', 'mimetypes:image/jpg,image/png', 'regex:/^(.*)(\.jpg|\.png)$/i'],
            'carousel_image_3' => ['required', 'max:2048', 'file', 'image', 'mimes:png,jpg', 'mimetypes:image/jpg,image/png', 'regex:/^(.*)(\.jpg|\.png)$/i'],
            'ninja_product_title' => ['required', 'string', 'max:250', 'min:10', 'alpha', 'regex:/^[a-zA-Z1-9]+$/'],
            'ninja_product_detail' => ['required', 'string', 'max:50000', 'min:500', 'regex:/^[a-zA-Z0-9$]+$/|string'],
            'ninja_product_shiping_detail' => ['required', 'string', 'max:50000', 'min:500', 'regex:/^[a-zA-Z0-9$]+$/|string'],
            'ninja_product_price' => ['required', 'numeric', 'between:1, 9'],
            'ninja_product_shiping_price' => ['required', 'numeric', 'between:1, 9']
        ]);
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
