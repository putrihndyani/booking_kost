@extends('layout.admin')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                            <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- data table --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Booking Kamar</h4>
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#bd-example-modal-lg" type="button">
                                <i class="fa-solid fa-square-plus"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Booking</th>
                                            <th>Id User</th>
                                            <th>ID Tipe Kamar</th>
                                            <th>Tanggal Awal</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Status</th>
                                            <th>Harga</th>
                                            <th>Desc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookingkamar as $key => $bk)
                                            <tr>
                                                <td class="text-center">{{ $key + 1 }}</td>
                                                <td class="text-center">{{ $bk->kode_booking }}</td>
                                                <td class="text-center">{{ $bk->id_user }}</td>
                                                <td class="text-center">{{ $bk->id_tipekamar }}</td>
                                                <td class="text-center">{{ $bk->tgl_awal }}</td>
                                                <td class="text-center">{{ $bk->tgl_akhir }}</td>
                                                <td class="text-center">{{ $bk->status }}</td>
                                                <td class="text-center">{{ $bk->harga }}</td>
                                                <td class="text-center">{{ $bk->desc }}</td>
                                                <td class="text-center">
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('bookingkamar.edit', $bk->kode_booking) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>

                                                    <!-- Tombol Delete -->
                                                    <form action="{{ route('bookingkamar.destroy', $bk->kode_booking) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?')">Delete</button>
                                                    </form>
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

        {{-- modal --}}
        <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Tambah Data Kamar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="pd-20 card-box mb-30">
                            <form action="{{ url('bookingkamar') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kode Booking</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="kode_booking"
                                            placeholder="Kode Booking">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">ID User</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="id_user" placeholder="ID User">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">ID Tipe Kamar</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="id_tipekamar"
                                            placeholder="ID Tipe Kamar">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Tanggal Awal</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="tgl_awal"
                                            placeholder="Tanggal Awal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Tanggal Akhir</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="tgl_akhir"
                                            placeholder="Tanggal Akhir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="status" placeholder="Status">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Harga</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="harga" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" name="desc"
                                            placeholder="Deskripsi">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.themekita.com">ThemeKita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Licenses</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                        href="https://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>
@endsection
