@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Play Date and Time</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('playdatetimes.create') }}">Create New Play Date and Time</a>
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
            <th>Play Date</th>
            <th>Play Time</th>
        </tr>
        @foreach ($playdatetimes as $playdatetime)
        <tr>
            <td>{{ $playdatetime->play_date }}</td>
            <td>{{ $playdatetime->play_time }}</td>            
            <td>{{ $playdatetime->eprogram_id }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('playdatetimes.show',$playdatetime->pdt_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('playdatetimes.edit',$playdatetime->pdt_id) }}">Edit</a>
                <form action="{{ route('playdatetimes.destroy',$playdatetime->pdt_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection