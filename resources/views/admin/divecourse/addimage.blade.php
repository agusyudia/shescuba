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
        <form action="{{route('admin.addimagecourse.post')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{$divecourse->id}}" name="id_course">
            <div class="input-group hdtuto control-group lst increment">
                <input type="file" name="filenames[]" class="myfrm form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <div class="clone hide">
                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>

            <div class="form-group text-right">
                <a href="{{route('admin.divecourse')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection