@extends('layout.admin')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Contributors Page</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contributorspage.index') }}"> Back</a>
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

<form action="{{ route('contributorspage.store') }}" method="POST">
    @csrf

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="eprogram_id">
                <option>Please Select A Program</option>
                @foreach ($eprog as $ep)
                <option value="{{ $ep->eprogram_id }}">
                    {{ $ep->program_title }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Staff Title:</strong>
                <input type="text" name="staff_title" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contributor Description:</strong>
                <input type="text" name="description" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="sr_id">
                <option>Please Select A Staff Role</option>
                @foreach ($staffroles as $staffrole)
                <option value="{{ $staffrole->sr_id }}">
                    {{ $staffrole->role_name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="contributor_id">
                <option>Please Select the Staff's Name</option>
                @foreach ($contributors as $c)
                <option value="{{ $c->contributor_id }}">
                    {{ $c->first_name, $c->last_name }}
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