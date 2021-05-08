@extends('gantele.layouts')

@section('content')
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

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
              <th>Password</th>
              <th>Age</th>
              <th>Place of Birth</th>
              <th>Place of Domicile</th>
              <th>Residence</th>
              <th>Date Deleted</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
              <td>{{ $user->password }}</td>
              <td>{{ $user->age }}</td>
              <td>{{ $user->place_of_birth}}</td>
              <td>{{ $user->place_of_domicile }}</td>
              <td>{{ $user->residence }}</td>
              <td>{{date_format($user->deleted_at, 'jS M Y')}}</>



            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{route('restoreDeletedusers', $user->id)}}" title="restore user">
                  <i class="fas fa-window-restore text-success fa-lg"></i>
                </a>
                <a href="{{route('deletePermanently', $user->id)}}" title="Permanently delete">
                  <i class="fas fa-trash text-danger fa-lg"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection
