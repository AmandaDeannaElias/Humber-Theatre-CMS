@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Faculty</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('faculties.create') }}"> Create New Homepage</a>
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
            <th>Faculty Name</th>   
            <th>Faculty Position</th>
            <th>Humber Theatre Id</th>            
        </tr>
        @foreach ($faculties as $faculty)
        <tr>
            <td>{{ $faculty->faculty_name }}</td>
            <td>{{ $faculty->faculty_position }}</td>
            <td>{{ $faculty->ht_id }}</td>            
            <td>
                    <a class="btn btn-info" href="{{ route('faculties.show', $faculty->faculty_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('faculties.edit', $faculty->faculty_id) }}">Edit</a>
                <form action="{{ route('faculties.destroy',$faculty->faculty_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection