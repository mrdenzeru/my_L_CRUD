@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Add New Blog</h2>
        </div>
        <div class="float-end">
            <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('blogs.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control mb-3" placeholder="Title">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Detail:</strong>
                <textarea name="details" class="form-control" style="height:150px;" placeholder="Detail">
                    {{-- sample --}}
                </textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection