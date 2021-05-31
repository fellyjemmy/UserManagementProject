
@extends('gantele.layouts')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
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


<form action="{{ route('products.store') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
  @csrf

                        <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="product_name" name="product_name" required="required" placeholder="product name" class="form-control">
                        </div>
                      </div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category_name">Category  <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                        <select type="text" name="category_name" class="form-control" id="category_name" placeholder="">
                                            @foreach($categories as $category)
                                                {{--<option value="{{$category->all}}" {{ old('category') ? 'selected' : '' }}>{{$category->all()}}</option>--}}
                                                <option value="{{$category->id}}" {{ old('category') ? 'selected' : '' }}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
											</div>
										</div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="quantity_available">Quantity available  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="integer" id="quantity_available" name="quantity_available" required="required" placeholder="quantity_available" class="form-control">
                      </div>
                    </div>
                    
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_entrance_date">Entrance Date <span class=""></span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="date" id="product_entrance_date" name="product_entrance_date" required="required" placeholder="">

                      </div>
                    </div>

                    <!-- <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="product_finishup_date">Product Out Date <span class=""></span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="date" id="product_finishup_date" name="product_finishup_date" required="" placeholder="out date" class="form-control">
                      </div>
                    </div>
 -->


										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
@endsection
