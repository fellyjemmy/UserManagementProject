@extends('gantele.layouts')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New user</a>
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
                            <th>Name</th>
                            <th>Email</th>
                              <th>Age(Years)</th>
                              <th>Residence</th>
                            <th width="280px">Action</th>
                          </tr>
                        </thead>
                        @forelse ($users as $user)
                        <tbody>

                        <tr>


                            <!-- <td>{{ ++$i }}</td> -->
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                              <td>{{ $user->age }}</td>
                              <td>{{ $user->residence }}</td>

                            <td>
                                <form  action="{{ route('users.destroy',$user->id) }}" method="POST">


                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>


                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"   onclick="return confirm('Do you want to delete this user?')">Delete</button>


                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>No User found</p>
                        @endforelse

                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>















    {!! $users->links() !!}

@endsection
