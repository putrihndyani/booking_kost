@extends('layout.admin')

@section('content')
    @php
        $value = DB::table('data_kamars')->first();
    @endphp
    <div class="main-panel">
        <div class="content d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="card"
                style="width: 100%; max-width: 800px; background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Tambah Data Kamar</h5>
                    <form action="{{ url('datakamar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">No Kamar</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="no_kamar" value="{{ $value->no_kamar }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">ID Tipe Kamar</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="id_tipekamar"
                                    value="{{ $value->id_tipekamar }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Status</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="status" value="{{ $value->status }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Harga</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="harga" value="{{ $value->harga }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Kamar</label>
                            <div class="custom-file">
                                <img class="img-thumbnail mx-auto d-block" id="previewImage"
                                    src="{{ asset('backend/asset/images/photo.png') }}" alt="Preview"
                                    style="max-width: 100%; max-height: 200px;">
                                <input type="file" class="form-control mt-2" name="foto_kamar[]" id="foto_kamar" multiple
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Deskripsi</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="desc" placeholder="desc"
                                    value="{{ $value->desc }}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
