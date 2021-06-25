@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Humber Theatre Page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('humbertheatrepages.create') }}"> Create New Humber Theatre Page</a>
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
            <th>Faculty Year</th>
            <th>Special Thanks</th>
            <th>Program Title</th>
        </tr>
        @foreach ($humbertheatrepages as $humbertheatrepage)
        <tr>
            <td>{{ $humbertheatrepage->faculty_year }}</td>
            <td>{{ $humbertheatrepage->special_thanks }}</td>            
            <td>{{ $humbertheatrepage->eprogram_id }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('humbertheatrepages.show', $humbertheatrepage->ht_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('humbertheatrepages.edit', $humbertheatrepage->ht_id) }}">Edit</a>
                <form action="{{ route('humbertheatrepages.destroy',$humbertheatrepage->ht_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection