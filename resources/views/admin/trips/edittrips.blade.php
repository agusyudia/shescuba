@extends('admin.app')
@section('contentadmin')

<div class="col pt-7">
    <div class="card p-3">
        <h3>Form Edit Trips</h3>
        <hr>
        <form action="{{route('admin.trip.edittrips.put', $trips->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Title</label>
                <input class="form-control" type="text" value="{{ old('title', $trips->title) }}" placeholder="Input Title Dive Trips" id="example-text-input" name="title">
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Address</label>
                <input class="form-control" type="text" id="example-number-input" placeholder="Input Address Trips" name="address" value="{{ old('address', $trips->address) }}">
            </div>
            <div class="form-group">
                <label for="example-tumbnail-input" class="form-control-label">Image</label>
                <input class="form-control" type="file" id="example-tumbnail-input" name="image" value="{{ old('image', $trips->image) }}">
            </div>


            <div class="form-group text-right">
                <a href="{{route('admin.trips')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection