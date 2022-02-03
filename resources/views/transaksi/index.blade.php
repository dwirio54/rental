@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert"> Ini Adalah Data Tranksaksi terakhir </div>
        </div>
</div>
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>no faktur</th>
                    <th>Nama Supplier</th>
                    <th>Kode Barang</th>
                    <th>nama penyewa</th>
                    <th>tgl pinjam</th>
                    <th>tgl kembali</th>
                    <th>lama sewa</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td>FR20220202</td>
                            <td>ps4</td>
                            <td>ps-01-02</td>
                            <td>dwirio</td>
                            <td>2022-02-02</td>
                            <td>2022-02-03</td>
                            <td>1 hari</td>
                            <td>
                        <form action ="" method="">
                        <a href="" class="btn btn-info btn-sm">Kirim Notifikasi</a>
                        <button class="btn btn-info btn-sm">Buat Pengembalian</a>
                        </form>
                    </td>
                        </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection
