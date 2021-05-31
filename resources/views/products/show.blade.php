@extends('gantele.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row align-items-right">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Product Name:</strong>
              {{$product->product_name}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Category Name:</strong>
              {{$product->category->category_name}}

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Quantity Available:</strong>
              {{$product->quantity_available}}

          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Entrance Date:</strong>
              {{$product->product_entrance_date}}

          </div>
      </div>


               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Product FinishUp Date:</strong>
                       {{$product->product_finishup_date}}

                   </div>
               </div>




    </div>
@endsection
