@extends('home.index')
@section('ninja_default_section')

<div class="main-content">
     <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                   <h1 class="m-1">Create Ninja Product</h1>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <button class="btn btn-info btn-sm m-2"> Back List</button>
                    <button class="btn btn-info btn-sm m-2">Category Section</button>
                    <button class="btn btn-info btn-sm m-2"> Update product</button>
                    <button class="btn btn-info btn-sm m-2">Recycle Bin</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                {{-- image --}}
                <div class="form-group">
                    <label for="" class="form-lavel">Thumnail Image</label>
                    <input name="ninja_thumnail_image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-lavel">Carousel Image 1</label>
                    <input name="carousel_image_1" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-lavel">Carousel Image 2</label>
                    <input name="carousel_image_2" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-lavel">Carousel Image 3</label>
                    <input name="carousel_image_3" type="file" class="form-control">
                </div>

               {{-- price details and others attribute --}}

                <div class="form-group">
                    <label for="" class="form-lavel">Product Title</label>
                    <input name="ninja_product_title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-lavel">Product Price</label>
                    <input name="ninja_product_price" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-lavel">Shiping Price</label> 
                    <input name="ninja_product_shiping_price" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="" class="form-lavel">Product Detail</label>
                  <textarea name="ninja_product_detail" type="text" class="form-control" cols="30" rows="15"> </textarea>
                </div>
                <div class="form-group">
                  <label for="" class="form-lavel">Shiping Detail</label>
                  <textarea name="ninja_product_shiping_detail" type="text" class="form-control" cols="30" rows="5"> </textarea>
                </div>
               <div class="form-group mt-3">
                <button class="btn btn-primary">Submit</button>
               </div>
            </form>
        </div>
   </div>  
     
</div>

@endsection