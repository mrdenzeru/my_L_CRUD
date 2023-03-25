@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Blog List</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->details }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('blogs.show',$blog->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $blogs->links() }}

@endsection