@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Faculties</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faculties.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Name:</strong>
                {{ $faculty->faculty_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty position:</strong>
                {{ $faculty->faculty_position }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Year:</strong>                
                {{ $faculty->ht_id }}
            </div>
        </div>

    </div>
@endsection