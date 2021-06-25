@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Play Credit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('playcredits.create') }}">Create New Play Credit</a>
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
            <th>Play Title</th>
            <th>Play Name</th>
        </tr>
        @foreach ($playcredits as $playcredit)
        <tr>
            <td>{{ $playcredit->pc_title }}</td>
            <td>{{ $playcredit->pc_name }}</td>            
            <td>{{ $playcredit->eprogram_id }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('playcredits.show',$playcredit->pc_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('playcredits.edit',$playcredit->pc_id) }}">Edit</a>
                <form action="{{ route('playcredits.destroy',$playcredit->pc_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection