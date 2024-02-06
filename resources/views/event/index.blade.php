@extends('kerangka.master')
@section('content')

<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Table Event</h4>
                    <a class="btn btn-primary" href="{{route('event.create')}}">Tambah Event</a>
                </div>
                @if (session()->has('Succes'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('Succes')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                    </div>
                    @elseif (session()->has('Failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('Failed')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-content">
                    <div class="card-body">

                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="table-active">Id</th>
                                        <th class="table-active">Event Name</th>
                                        <th class="table-active">Date</th>
                                        <th class="table-active">Location</th>
                                        <th class="table-active">Fee</th>
                                        <th class="table-active">Description</th>
                                        <th class="table-active">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event )
                                        <tr>
                                            <td class="table-dark">{{$loop->iteration}}</td>
                                            <td class="table-warning">{{$event->name}}</td>
                                            <td class="table-danger">{{$event->date}}</td>
                                            <td class="table-info">{{$event->location}}</td>
                                            <td class="table-success">{{$event->fee}}</td>
                                            <td class="table-primary">{{$event->description}}</td>
                                            <td>
                                                <div class="d-flex ">
                                                    <a class="btn btn-warning mx-1 "
                                                    href="/events/{{$event->id}}/edit">Update</a>
                                                    <form action="{{ route('event.hapus', $event->id )}}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Basic Tables end -->

@endsection
