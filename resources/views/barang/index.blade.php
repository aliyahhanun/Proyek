@extends('barang.layout')
@section('content')

 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2 style="text-align:center">PT.KELOMPOK 4 MATA KULIAH PROJECT PERSERO</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
 </div>
 </div>
 </div>
 <style>
     body {
        background-color: #94ebcd;    
     }
     table {
        background-color:#FFEFA1;
     }
     table th, td{
         color:#CD4343;
     }
     h2 {
         color:#CD4343;
     }
 </style>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
 <tr>
 <th>Kode Barang</th>
 <th>Nama Barang</th>
 <th>Deskripsi</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($barang as $brg)
 <tr>
 
 <td>{{ $brg ->id_barang }}</td>
 <td>{{ $brg ->nama_barang }}</td>
 <td>{{ $brg ->deskripsi }}</td>
 <td>
 <form action="{{ route('barang.destroy',['barang'=>$brg->id_barang]) }}" method="POST">
 
 <a class="btn btn-info" href="{{ route('barang.show',$brg->id_barang) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('barang.edit',$brg->id_barang) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
@endsection