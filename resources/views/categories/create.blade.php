
@extends('gantele.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
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


<form action="{{ route('categories.store') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
  @csrf

                        <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="category_name" name="category_name" required="required" placeholder="category name" class="form-control">
                        </div>
                      </div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="category_description">Category Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="category_description" name="category_description" required="required" placeholder="category description" class="form-control">
											</div>
										</div>
									


										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
@endsection
