@extends('layout.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Homepage</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('homepages.index') }}"> Back</a>
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

    <form action="{{ route('homepages.update',$homepage->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="main_img" value="{{ $homepage->main_img }}" id="main_img">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image Credit:</strong>
                <input type="text" name="img_credit" value="{{ $homepage->img_credit }}" id="img_credit">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Main Title</strong>
                <input type="text" name="main_title" value="{{ $homepage->main_title }}" id="main_title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sub Title:</strong>
                <input type="text" name="sub_title" value="{{ $homepage->sub_title }}" id="sub_title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Program Description:</strong>
                <textarea class="form-control" style="height:150px" placeholder="Program Description" value="{{ $homepage->program_description }}"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <input type="text" value="{{ $homepage->location }}" id="location">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Warning:</strong>
                <textarea class="form-control" style="height:150px" value="{{ $homepage->content_warning }}"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" name="eprogram_id">
                <option>Please Select A Program:</option>
                @foreach ($eprog as $ep)
                <option value="{{ $ep->eprogram_id }}" {{$homepage->eprogram_id == $ep->eprogram_id ? 'selected' : ''}}>
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