@extends('admin.app')
@section('contentadmin')

<div class="col pt-7">
    <div class="card p-3">
        <h3>Form Add Galery</h3>
        <hr>
        <form action="{{route('admin.addgalery.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-tumbnail-input" class="form-control-label">Image</label>
                <input class="form-control" type="file" id="example-tumbnail-input" name="filenames">
            </div>


            <div class="form-group text-right">
                <a href="{{route('admin.galery')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection