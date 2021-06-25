@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contributors Page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contributorspage.create') }}"> Create New Contributors Page</a>
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
            <th>Eprogram</th>
            <th>Contributor Title</th>
            <th>Contributor Description</th>
            <th>Contributor Role</th>
            <th>Contributor Name</th>
        </tr>
        @foreach ($contributorspages as $contributorspage)
        <tr>
            <td>{{$contributorspage->eprogram_id}}</td>
            <td>{{ $contributorspage->staff_title }}</td>
            <td>{{ $contributorspage->description }}</td>
            <td>{{ $contributorspage->sr_id }}</td>
            <td>{{ $contributorspage->contributor_id}}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('contributorspage.show', $contributorspage->contributorpage_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('contributorspage.edit', $contributorspage->contributorpage_id) }}">Edit</a>
                <form action="{{ route('contributorspage.destroy',$contributorspage->contributorpage_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection