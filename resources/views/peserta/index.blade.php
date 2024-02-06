@extends('kerangka.master')
@section('content')

<!-- Basic Tables start -->
 <section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Table Peserta</h4>
                    <a class="btn btn-primary" href="{{route('peserta.create')}}">Tambah Peserta</a>
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
                                        <th>Id</th>
                                        <th>Event Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $pesertas as $peserta )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$peserta->event_id}}</td>
                                            <td>{{$peserta->name}}</td>
                                            <td>{{$peserta->phone}}</td>
                                            <td>{{$peserta->address}}</td>
                                            <td>{{$peserta->email}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning mx-1"
                                                    href="/pesertas/{{$peserta->id}}/edit">Update</a>
                                                    <form action="{{ route('peserta.hapus', $peserta->id )}}"
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
