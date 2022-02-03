@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                <a href="{{route('daftarbarang.create')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
                <div>
                    <button class="btn btn-info"> Cari data </button>
                </div>
                <form action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="awal" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="akhir" class="form-control">
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Harga Satuan</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($barangs as barang)
                    <td>{{$barangs->kode_barang}}</td>
                    <td>{{$barangs->nama_barang}}</td>
                    <td>{{$barangs->quantity}}</td>
                    <td>{{$barangs->idr}}</td>
                    <td>
                        <form action ="{{route('destroy.daftarbarang', $barang->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('barang.edit', $barang->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <button class="submit" class="btn btn-danger btn-sm">Delete</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
