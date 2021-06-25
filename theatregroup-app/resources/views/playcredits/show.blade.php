@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Play Credit:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('playcredits.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Play Credit Title:</strong>
                {{ $playcredit->pc_title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Play Credit Name:</strong>
                {{ $playcredit->pc_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program:</strong>                
                {{ $playcredit->eprogram_id }}
            </div>
        </div>

    </div>
@endsection