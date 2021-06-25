@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of EPrograms</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('eprograms.create') }}"> Create New EProgram</a>
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
            <th>Program Title</th>
        </tr>
        @foreach ($eprograms as $eprogram)
        <tr>
            <td>{{ $eprogram->program_title }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('eprograms.show',$eprogram->eprogram_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('eprograms.edit',$eprogram->eprogram_id) }}">Edit</a>
                <form action="{{ route('eprograms.destroy',$eprogram->eprogram_id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection