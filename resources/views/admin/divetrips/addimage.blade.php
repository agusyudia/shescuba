@extends('admin.app')
@section('contentadmin')

<div class="col pt-7">
    <div class="card p-3">
        <h3>Form Add Image Dive Trips</h3>
        <hr>
        <form action="{{route('admin.addimagetrips.post')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{$divetrips->id}}" name="id_trips">
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
                <a href="{{route('admin.divetrip')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection