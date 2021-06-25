@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Faculties</h2>
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

    <form action="{{ route('faculties.update',$faculty->faculty_id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Name:</strong>
                <input type="text" name="faculty_name" value="{{ $faculty->faculty_name }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Position:</strong>
                <input type="text" name="faculty_position" value="{{ $faculty->faculty_position}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="ht_id">
                <option>Please Select A Year</option>
                @foreach ($htp as $ht)
                <option value="{{ $ht->ht_id }}" {{$faculty->ht_id == $ht->ht_id ? 'selected' : ''}}>
                    {{ $ht->faculty_year }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
@endsection