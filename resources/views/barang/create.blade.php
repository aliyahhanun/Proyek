@extends('barang.layout')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Tambah Barang
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('barang.store') }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="Id_barang">Kode Barang</label> 
 <input type="text" name="Id_barang" class="form-control" id="Id_barang" aria-describedby="Id_barang" > 
 </div>
 <div class="form-group">
 <label for="Nama_barang">Nama Barang</label> 
 <input type="Nama_barang" name="Nama_barang" class="form-control" id="Nama_barang" ariadescribedby="Nama_barang" > 
 </div>
 <div class="form-group">
 <label for="Deskripsi">Deskripsi</label> 
 <input type="Deskripsi" name="Deskripsi" class="form-control" id="Deskripsi" ariadescribedby="Deskripsi" > 
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection