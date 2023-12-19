<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request, App\Models\Product, Illuminate\Support\Str;

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
        
        // $imageFile = time() .'_'. Str::slug($request->ninja_thumnail_image->getClientOriginalName());

        $thumnailImageFile = Str::uuid() . '_' . Str::slug($request->ninja_thumnail_image->getClientOriginalName());
        $cleanFileNameWithExtension = $thumnailImageFile . '.' . $request->image->getClientOriginalExtension();
        $ThumnailImageFilePath = $request->image->storeAs('ThumnailDirectory', $cleanFileNameWithExtension);

        $carouselimageOneFile   = Str::uuid() . '_' . Str::slug($request->carousel_image_1->getClientOriginalName());     ///IF I FOR LOOP it will more clear and code readability maybe
        $carouselimageTwoFile   = Str::uuid() . '_' . Str::slug($request->carousel_image_2->getClientOriginalName());
        $carouselimageThreeFile = Str::uuid() . '_' . Str::slug($request->carousel_image_3->getClientOriginalName()); 


        $carouselimageOneFileWithExtention   =  $carouselimageOneFile . '.' . $request->carousel_image_1->getClientOriginalExtension();
        $carouselimageTwoFileWithExtention   =  $carouselimageTwoFile . '.' . $request->carousel_image_2->getClientOriginalExtension();
        $carouselimageThreeFileWithExtention =  $carouselimageThreeFile . '.' . $request->carousel_image_3->getClientOriginalExtension();

        $carouselimageOneFilePath = $request->image->storeAs('ThumnailImageOne', $carouselimageOneFileWithExtention);
        $carouselimageTwoFilePath = $request->image->storeAs('ThumnailImageTwo', $carouselimageTwoFileWithExtention);
        $carouselimageThreeFilePath = $request->image->storeAs('ThumnailImageThree', $carouselimageThreeFileWithExtention);

        $product->thumnail_image   =  'storage/'.$ThumnailImageFilePath;
        $product->product_image_1  =  'storage/'.$carouselimageOneFilePath;
        $product->product_image_2  =  'storage/'.$carouselimageTwoFilePath;
        $product->product_image_3  =  'storage/'.$carouselimageThreeFilePath;
        $product->product_title    =   $request->ninja_product_title;
        $product->product_detail   =   $request->ninja_product_detail;
        $product->shiping_detail   =   $request->ninja_product_shiping_detail;
        $product->product_price    =   $request->ninja_product_price;
        $product->shiping_cost     =   $request->ninja_product_shiping_price;
        $product->save();

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
