@extends('gantele.layouts')

@section('content')
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

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Product</th>
            <th>Category Name</th>
            <th>Quantity Available</th>
            <th>Product Entrance Date</th>
            <th>Product Finishup date</th>
              <th>Date Deleted</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->product_name}}</td>

              <td>{{ $product->category_name }}</td>
              <td>{{ $product->quantity_available }}</td>
              <td>{{ $product->products_left }}</td>


              <td>{{ $product->product_entrance_date }}</td>

              <td>{{ $product->product_finishup_date }}</td>


              <td>{{date_format($product->deleted_at, 'jS M Y')}}</>



            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{route('restoreDeletedproducts', $product->id)}}" title="restore product">
                  <i class="fas fa-window-restore text-success fa-lg"></i>
                </a>
                <a href="{{route('deletePermanently', $product->id)}}" title="Permanently delete">
                  <i class="fas fa-trash text-danger fa-lg"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
