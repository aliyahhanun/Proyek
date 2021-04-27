@extends('barang.layout')
@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Barang
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>Kode Barang: </b>{{$Barang->id_barang}}</li>
 <li class="list-group-item"><b>Nama Barang: </b>{{$Barang->nama_barang}}</li>
 <li class="list-group-item"><b>Deskripsi: </b>{{$Barang->deskripsi}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection