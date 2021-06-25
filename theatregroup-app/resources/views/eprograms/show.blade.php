@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show EProgram</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('eprograms.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>EProgram:</strong>
                {{ $eprogram->program_title }}
            </div>
        </div>

    </div>
@endsection