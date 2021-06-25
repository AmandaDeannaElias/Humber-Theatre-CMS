@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Staff Roles</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('staffroles.create') }}"> Create New Staff Role</a>
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
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($staffroles as $staffrole)
        <tr>
            <td>{{ $staffrole->role_name }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('staffroles.show',$staffrole->sr_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('staffroles.edit',$staffrole->sr_id) }}">Edit</a>
                <form action="{{ route('staffroles.destroy',$staffrole->sr_id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection