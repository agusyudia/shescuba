@extends('admin.app')
@section('contentadmin')

<div class="col pt-7">
    <div class="card p-3">
        <h3>Form Add Dive Trips</h3>
        <hr>
        <form action="{{route('admin.addtrips.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Title</label>
                <input class="form-control" type="text" placeholder="Input Title Dive Trips" id="example-text-input" name="title">
            </div>
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Input Description Dive Trips" id="example-text-input"></textarea>
            </div>
            <div class="form-group">
                <label for="example-number-input" class="form-control-label">Price</label>
                <input class="form-control" type="number" id="example-number-input" placeholder="Input Price Dive Trips" name="price">
            </div>
            <div class="form-group">
                <di class="row">
                    <div class="col">
                        <label for="example-duration-input" class="form-control-label">Available</label>
                        <input class="form-control" type="number" placeholder="Input Available Dive Trips" id="example-duration-input" name="available">
                    </div>
                    <div class="col">
                        <label for="example-duration-input" class="form-control-label">Kode Level Dive</label>
                        <input class="form-control" type="text" placeholder="Input Kode Level Dive Dive Trips" id="example-duration-input" name="kode_level">
                    </div>
                    <div class="col">
                        <label for="example-duration-input" class="form-control-label">Water Entry</label>
                        <input class="form-control" type="text" placeholder="Input Water Entry Dive Trips" id="example-duration-input" name="water_entry">
                    </div>
                    <div class="col">
                        <label for="example-duration-input" class="form-control-label">Water Conditions</label>
                        <input class="form-control" type="text" placeholder="Input Water Conditions Dive Trips" id="example-duration-input" name="water_conditions">
                    </div>
                </di>
            </div>
            <div class="form-group">
                <label for="example-tumbnail-input" class="form-control-label">Tumbnail</label>
                <input class="form-control" type="file" id="example-tumbnail-input" name="tumbnail">
            </div>


            <div class="form-group text-right">
                <a href="{{route('admin.divetrip')}}" class="btn btn-warning">Cancel</a>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection