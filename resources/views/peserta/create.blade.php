@extends('kerangka.master')
@section('content')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Peserta</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{ route('peserta.buat') }}">
                    @csrf

                    <div class="form-body">
                        <div class="row">

                            <div class="col-md-4">
                                <label>Event Id</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="event_id"
                                class="form-control @error('event_id') is invalid
                                @enderror"
                                name="event_id" value="{{ old('event_id')}}" placeholder="Event Id">
                                @error('event_id')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Name</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="name" name="name"
                                class="form-control @error('name') is invalid

                                @enderror"
                                   value="{{old('name')}}" placeholder="Name">
                                   @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                   @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="phone"
                                class="form-control @error('phone') is invalid

                                @enderror"
                                name="phone" value="{{ old('phone')}}" placeholder="Phone">
                                @error('phone')

                                <div class="alert alert-danger">{{$message}}</div>

                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Address</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="address"
                                class="form-control @error('address') is invalid
                                @enderror"
                                name="address" value="{{ old('address')}}" placeholder="Address">
                                @error('address')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" id="email"
                                class="form-control @error('email') is invalid

                                @enderror"
                                name="email" value="{{ old('email')}}" placeholder="Email">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
