@extends('gantele.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New category</a>
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
            <th>Category Name</th>

            <th>Category Description</th>

              <th>Date Deleted</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->category_name }}</td>

              <td>{{ $category->category_description }}</td>

              <td>{{date_format($category->deleted_at, 'jS M Y')}}</>



            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{route('restoreDeletedcategories', $category->id)}}" title="restore category">
                  <i class="fas fa-window-restore text-success fa-lg"></i>
                </a>
                <a href="{{route('deletePermanently', $category->id)}}" title="Permanently delete">
                  <i class="fas fa-trash text-danger fa-lg"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $categories->links() !!}

@endsection
