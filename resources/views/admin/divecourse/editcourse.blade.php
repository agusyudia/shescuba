@extends('admin.app')
@section('contentadmin')

<div class="col pt-7">
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card p-3">
        <h3>Form Edit Course</h3>
        <hr>
        <form action="{{route('admin.editcourse.put', $divecourse->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Title</label>
                <input class="form-control" name="title" value="{{ old('title', $divecourse->title) }}" type="text" placeholder="Input Title Dive Course" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Input Description Dive Course" id="example-text-input">{{ old('description', $divecourse->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="example-duration-input" class="form-control-label">Duration</label>
                <input class="form-control" type="text" placeholder="Input Duration DiveCourse" id="example-duration-input" name="duration" value="{{ old('duration', $divecourse->duration) }}">
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Price</label>
                <input class="form-control" type="number" id="example-number-input" placeholder="Input Price Dive Course" name="price" value="{{ old('price', $divecourse->price) }}">
            </div>
            <div class="form-group">
                <label for="example-tumbnail-input" class="form-control-label">Tumbnail</label>
                <input class="form-control" type="file" id="example-tumbnail-input" name="tumbnail" value="{{ old('tumbnail', $divecourse->tumbnail) }}">
            </div>

            <div class="form-group text-right">
                <a href="{{route('admin.divecourse')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection