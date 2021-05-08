@extends('gantele.layouts')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('people.create') }}"> Create New user</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
              <th>Age(Years)</th>
              <th>Residence</th>
            <th width="280px">Action</th>
        </tr>
        @forelse ($people as $user)
        <tr>


            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
              <td>{{ $user->age }}</td>
              <td>{{ $user->residence }}</td>

            <td>
                <form id="delete-{{$user->id}}" action="{{ route('people.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('people.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('people.edit',$user->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"  <a href="" onclick="if(confirm('Do you want to delete this user?'))event.preventDefault(); document.getElementById('delete-{{$user->id}}').submit();" ></a>Delete</button>



                </form>
            </td>
        </tr>
        @empty
        <p>No user found</p>
        @endforelse


    </table> -->

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
                            <th>Name</th>
                            <th>Email</th>
                              <th>Age(Years)</th>
                              <th>Residence</th>
                            <th width="280px">Action</th>
                          </tr>
                        </thead>
                        @forelse ($people as $user)
                        <tbody>

                        <tr>


                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                              <td>{{ $user->age }}</td>
                              <td>{{ $user->residence }}</td>

                            <td>
                                <form id="delete-{{$user->id}}" action="{{ route('people.destroy',$user->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('people.show',$user->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('people.edit',$user->id) }}">Edit</a>


                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"  <a href="" onclick="if(confirm('Do you want to delete this user?'))event.preventDefault(); document.getElementById('delete-{{$user->id}}').submit();" ></a>Delete</button>



                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>No user found</p>
                        @endforelse

                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>















    {!! $people->links() !!}

@endsection
