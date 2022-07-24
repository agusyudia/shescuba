@extends('admin.app')
@section('contentadmin')

<div class="col pt-7">
    <div class="card p-3">
        <h3>Form Edit Team</h3>
        <hr>
        <form action="{{route('admin.editteam.put', $team->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Name</label>
                <input class="form-control" type="text" value="{{ old('name', $team->name) }}" placeholder="Input Team Name" id="example-text-input" name="name">
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Position</label>
                <input class="form-control" type="text" value="{{ old('position', $team->position) }}" id="example-number-input" placeholder="Input Team Position" name="position">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Input Description Dive Trips" id="example-text-input">{{ old('description', $team->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Link Twitter</label>
                <input class="form-control" type="text" value="{{ old('link_twitter', $team->link_twitter) }}" id="example-number-input" placeholder="Input Link Twitter" name="link_twitter">
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Link Instagram</label>
                <input class="form-control" type="text" value="{{ old('link_instagram', $team->link_instagram) }}" id="example-number-input" placeholder="Input Link Instagram" name="link_instagram">
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Link Facebook</label>
                <input class="form-control" type="text" value="{{ old('link_facebook', $team->link_facebook) }}" id="example-number-input" placeholder="Input Link Facebook" name="link_facebook">
            </div>
            <div class="form-group">
                <label for="example-tumbnail-input" class="form-control-label">Image</label><br>
                <img src="/upload/team/{{$team->image}}" alt="" width="200px" class="mb-2">
                <input class="form-control" type="file" id="example-tumbnail-input" name="image">
            </div>


            <div class="form-group text-right">
                <a href="{{route('admin.team')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection