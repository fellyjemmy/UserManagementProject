
@extends('gantele.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Product Name:</strong>
                   <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="Product name">
               </div>
           </div>
           <!-- <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Category Name:</strong>
                   <input type="text" name="category_name" value="{{ $product->category->category_name }}" class="form-control" placeholder="Category name">

               </div>
           </div> -->
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Quantity Available:</strong>
                   <input type="integer" name="quantity_available" value="{{ $product->quantity_available }}" class="form-control" placeholder="quantity available">
               </div>
           </div>

           <!-- <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Products Left:</strong>
                   <input type="integer" name="products_left" value="{{ $product->products_left }}" class="form-control" placeholder="products_left">
               </div>
           </div> -->
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Entrance Date:</strong>
                   <input type="date" name="product_entrance_date" value="{{ $product->product_entrance_date }}" class="form-control" placeholder="Entrance Date">
               </div>
           </div>


                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product FinishUp Date:</strong>
                            <input type="date" name="product_finishup_date" value="" class="form-control" placeholder="FinishUp Date">
                        </div>
                    </div> -->




            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
