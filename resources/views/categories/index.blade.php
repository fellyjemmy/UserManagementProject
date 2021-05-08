@extends('gantele.layouts')

@section('content')
<div>
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
                              <th>Category Name</th>

                            <th>Category Description</th>

                            <th width="280px">Action</th>
                          </tr>
                        </thead>
                        @forelse ($categories as $category)
                        <tbody>

                        <tr>


                            <!-- <td>{{ ++$i }}</td> -->
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>

                            <td>{{ $category->category_description }}</td>

                            <td>
                                <form  action="{{ route('categories.destroy',$category->id) }}" method="POST">


                                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>


                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"   onclick="return confirm('Do you want to delete this category?')">Delete</button>


                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>No category found</p>
                        @endforelse

                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


    {!! $categories->links() !!}

@endsection
