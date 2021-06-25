@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Play Date and Time</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('playdatetimes.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Play Date:</strong>
                {{ $playdatetime->play_date }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Play Time:</strong>
                {{ $playdatetime->play_time }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program:</strong>
                {{ $playdatetime->eprogram_id }}
            </div>
        </div>

    </div>
@endsection