@extends('admin.app')
@section('contentadmin')

<div class="col pt-6">

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

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Success!</strong> {{ session('success') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <a href="{{route('admin.trip.addtrips')}}" class="btn btn-success">Add Data</a>
    <div class="table-responsive text-white">
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Title
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Address
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trips as $trip)
                <tr>
                    <td class="text-sm font-weight-normal">{{ $loop->iteration }}</td>
                    <td class="text-sm font-weight-normal">{{$trip->title}}</td>
                    <td class="text-sm font-weight-normal">{{$trip->address}}</td>
                    <td class="text-sm font-weight-normal text-center">
                        <a href="{{ route('admin.trip.edittrips', $trip->id) }}" class="btn"><span class="fa fa-pen text-yellow"></span></a>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal-notification3"><span class="fa fa-trash text-red"></span></button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal-detail3-{{$trip->id}}"><span class="fa fa-clipboard text-blue"></span></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!-- modal  -->

<div class="modal fade" id="modal-notification3" tabindex="-1" role="dialog" aria-labelledby="modal-notification3" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="py-3 text-center">
                    <i class="fa fa-3x fa-trash"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>are you sure you delete the dive course data forever ?</p>
                </div>

            </div>

            <div class="modal-footer">
                <form action="{{ route('admin.trip.deletetrips', $trip->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-white">Ok, Delete</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@foreach ($trips as $trip)
<div class="modal fade" id="modal-detail3-{{$trip->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-detail3-{{$trip->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-detail">Detail</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="id" name="id" value="{{$trip->id}}">
                <h4 class="heading mt-4">Tumbnail</h4>
                <img src="/upload/trips/{{$trip->image}}" alt="" width="100%" class="">
                <h4 class="heading mt-4">Title</h4>
                <p>{{$trip->title}}</p>
                <h4 class="heading mt-4">Address</h4>
                <p>{{$trip->address}}</p>
                <button type="button" class="btn btn-danger text-white ml-auto mt-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection