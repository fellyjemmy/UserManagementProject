
@extends('gantele.layouts')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="x_content" >
                        <div class="row" >
                            <div class="col-sm-12">
                              <div class="card-box table-responsive">
                      <!-- <p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                      </p> -->
                      <table id="datatable" class="table table-striped table-bordered" bgcolor="silver">
                        <thead>
                          <tr>
                              <th>No</th>
                              <th>Product</th>
                              <th>Category Name</th>
                              <th>Quantity Available</th>
                              <th>Products Left</th>
                              <th>Product Entrance Date</th>
                              <!-- <th>Product Finishup date</th> -->
                            <th width="280px">Action</th>
                          </tr>
                        </thead>
                        @forelse ($products as $product)
                        <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category->category_name }}</td>
                            <td>{{ $product->quantity_available }}</td>
                            <td>{{ $product->quantity_available }}</td>
                            <td>{{ $product->product_entrance_date }}</td>
                            <!-- <td>{{ $product->date() }}</td> -->


                            <td>
                                <form  action="{{ route('products.destroy',$product->id) }}" method="POST">


                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>


                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"   onclick="return confirm('Do you want to delete this product?')">Delete</button>


                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>No product found</p>
                        @endforelse

                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


      {!! $products->links() !!}

@endsection
