
@extends('layout.admin')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Faculty</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('faculties.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('faculties.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Name:</strong>
                <input type="text" name="faculty_name" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Position:</strong>
                <input type="text" name="faculty_position" class="form-control">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="ht_id">
                <option>Faculty Year</option>
                @foreach ($htp as $ht)
                <option value="{{ $ht->ht_id }}">
                    {{ $ht->faculty_year }}
                </option>
                @endforeach
            </select>
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection