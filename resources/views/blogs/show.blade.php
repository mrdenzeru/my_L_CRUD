@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Show Blog</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $blog->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $blog->details }}
            </div>
        </div>
    </div>

@endsection