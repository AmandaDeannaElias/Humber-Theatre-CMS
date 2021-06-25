@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Homepage</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('homepages.create') }}"> Create New Homepage</a>
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
            <th>Main Image</th>
            <th>Image Credit</th>
            <th>Main Title</th>
            <th>Sub Title</th>
            <th>Program Description</th>
            <th>Location</th>
            <th>Content Warning</th>
            <th>Program</th>
        </tr>
        @foreach ($homepages as $homepage)
        <tr>
        <!--add proper img path -WM-->
            <td><img src=" {{ $homepage->main_img }} " /></td>
            <td>{{ $homepage->img_credit }}</td>
            <td>{{ $homepage->main_title }}</td>
            <td>{{ $homepage->sub_title }}</td>
            <td>{{ $homepage->program_description }}</td>
            <td>{{ $homepage->location }}</td>
            <td>{{ $homepage->content_warning }}</td>
            <td>{{ $homepage->eprogram_id }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('homepages.show', $homepage->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('homepages.edit', $homepage->id) }}">Edit</a>
                <form action="{{ route('homepages.destroy',$homepage->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection