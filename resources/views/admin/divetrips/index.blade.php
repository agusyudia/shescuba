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


    <a href="{{route('admin.addtrips')}}" class="btn btn-success">Add Data</a>
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
                        Price
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Available
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Kode Level Dive
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Water Entry
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Water Conditions
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Status
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($divetrips as $divetrip)
                <tr>
                    <td class="text-sm font-weight-normal">{{ $loop->iteration }}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->title}}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->price}}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->available}}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->kode_level_dive}}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->water_entry}}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->water_conditions}}</td>
                    <td class="text-sm font-weight-normal">{{$divetrip->status== 0 ? 'Publish':'Deleted'}}</td>
                    <td class="text-sm font-weight-normal text-center">
                        <a href="{{ route('admin.edittrips', $divetrip->id) }}" class="btn"><span class="fa fa-pen text-yellow"></span></a>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal-notification2-{{$divetrip->id}}"><span class="fa fa-trash text-red"></span></button>
                        <button type="button" class="btn" data-toggle="modal" data-target="#modal-detail2-{{$divetrip->id}}"><span class="fa fa-clipboard text-blue"></span></button>
                        <!-- <a href="{{ route('admin.editcourse', $divetrip->id) }}" class="btn"><span class="fa fa-clipboard text-blue"></span></a> -->
                        <a href="{{ route('admin.addimagetrips', $divetrip->id) }}" class="btn"><span class="fa fa-image text-blue"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@foreach ($divetrips as $divetrip)

<div class="modal fade" id="modal-notification2-{{$divetrip->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification2-{{$divetrip->id}}" aria-hidden="true">
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
                <form action="{{ route('admin.deletetrips', $divetrip->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-white">Ok, Delete</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
@endforeach

@foreach ($divetrips as $divetrip)
<div class="modal fade" id="modal-detail2-{{$divetrip->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-detail2-{{$divetrip->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-detail">Detail</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="id" name="id" value="{{$divetrip->id}}">
                <h4 class="heading mt-4">Tumbnail</h4>
                <img src="/upload/tumbnail/{{$divetrip->tumbnail}}" alt="" width="100%" class="">
                <h4 class="heading mt-4">Title</h4>
                <p>{{$divetrip->title}}</p>
                <h4 class="heading mt-4">Description</h4>
                <p>{{$divetrip->description}}</p>
                <div class="row">
                    <div class="col">
                        <h4 class="heading mt-4">Available</h4>
                        <p>{{$divetrip->available}} Orang</p>
                    </div>
                    <div class="col">
                        <h4 class="heading mt-4">Kode Level Dive</h4>
                        <p>{{$divetrip->kode_level_dive}}</p>
                    </div>
                    <div class="col">
                        <h4 class="heading mt-4">Water Entry</h4>
                        <p>{{$divetrip->water_conditions}} M</p>
                    </div>
                    <div class="col">
                        <h4 class="heading mt-4">Water Conditions</h4>
                        <p>{{$divetrip->water_entry}} C</p>
                    </div>
                    <div class="col">
                        <h4 class="heading mt-4">Price</h4>
                        <p>{{$divetrip->price}} K</p>
                    </div>
                </div>
                <button type="button" class="btn btn-danger text-white ml-auto mt-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection