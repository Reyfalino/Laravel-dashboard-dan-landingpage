@extends('kerangka.master')
@section('content')
<div class="col-md-18 col-18">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Event</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{ route('event.make') }}">
                    @csrf

                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Event</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="name" name="name"
                                class="form-control @error('name') is invalid

                                @enderror"
                                   value="{{old('name')}}" placeholder="Event Name">
                                   @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Date</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="date" id="date"
                                class="form-control @error('date') is invalid
                                @enderror"
                                name="date" value="{{ old('event_id')}}" placeholder="Date">
                                @error('date')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Location</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="location"
                                class="form-control @error('location') is invalid

                                @enderror"
                                name="location" value="{{ old('location')}}" placeholder="Location">
                                @error('location')

                                <div class="alert alert-danger">{{$message}}</div>

                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Fee</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text number" id="fee"
                                class="form-control @error('fee') is invalid
                                @enderror"
                                name="fee" value="{{ old('fee')}}" placeholder="Fee">
                                @error('fee')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Description</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="description"
                                class="form-control @error('description') is invalid

                                @enderror"
                                name="description" value="{{ old('description')}}" placeholder="Description">
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
