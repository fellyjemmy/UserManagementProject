
@extends('gantele.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Personel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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

<!-- <form action="{{ route('users.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="date" name="date_of_birth" class="form-control" placeholder="date of birth">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Place of Birth:</strong>
                <input type="text" name="place_of_birth" class="form-control" placeholder="Place of Birth">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Place of Domicile:</strong>
                    <input type="text" name="place_of_domicile" class="form-control" placeholder="Place of domicile">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Residence:</strong>
                    <input type="text" name="residence" class="form-control" placeholder="Residence">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form> -->


<form action="{{ route('users.store') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
  @csrf

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name"> Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" name="name" required="required" placeholder="name" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="email" name="email" required="required" placeholder="email" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="password" class="form-control" type="password" name="password" placeholder="password">
											</div>
										</div>

                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" class="date-picker form-control" name="date_of_birth" placeholder="dd-mm-yyyy" type="date" required="required">

											</div>
										</div>

                    <div class="item form-group">
											<label for="place_of_birth" class="col-form-label col-md-3 col-sm-3 label-align">Place of Birth  <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="place_of_birth" class="form-control" type="text" name="place_of_birth" placeholder="place of birth">
											</div>
										</div>

                    <div class="item form-group">
											<label for="place_of_domicile" class="col-form-label col-md-3 col-sm-3 label-align">Place of Domicile  <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="place_of_domicile" class="form-control" type="text" name="place_of_domicile" placeholder="place of domicile">
											</div>
										</div>

                    <div class="item form-group">
											<label for="residence" class="col-form-label col-md-3 col-sm-3 label-align">Residence <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="residence" class="form-control" type="text" name="residence" placeholder="residence">
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
