@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Humber Theatre Page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('humbertheatrepages.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Year:</strong>
                {{ $humbertheatrepage->faculty_year }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Special Thanks:</strong>
                {{ $humbertheatrepage->special_thanks }}
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program:</strong>                
                {{ $humbertheatrepage->eprogram_id }}
            </div>
        </div>

    </div>
@endsection