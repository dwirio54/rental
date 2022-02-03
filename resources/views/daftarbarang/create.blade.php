@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Membuat Data Barang Baru</li>
        </ol>
    </nav>
            <form action="{{route('daftarbarang.store')}}" method="post"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Harga Satuan</label>
                            <input type="text" name="idr" class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
