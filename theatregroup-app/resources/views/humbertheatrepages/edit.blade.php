@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Humber Theatre Page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('humbertheatrepages.index') }}"> Back</a>
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

    <form action="{{ route('humbertheatrepages.update',$humbertheatrepage->ht_id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Year:</strong>
                <input type="text" name="faculty_year" value="{{ $humbertheatrepage->faculty_year }}" id="faculty_year">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Special Thanks:</strong>
                <textarea class="form-control" style="height:150px" value="{{ $humbertheatrepage->special_thanks }}"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="eprogram_id">
                <option>Please Select A Program</option>
                @foreach ($eprog as $ep)
                <option value="{{ $ep->eprogram_id }}" {{$humbertheatrepage->eprogram_id == $ep->eprogram_id ? 'selected' : ''}}>
                    {{ $ep->program_title }}
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