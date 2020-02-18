
@extends('layout/main' )

@section('title','Detail mahasiswa')

@section('container')
<div class="container">
<div class="row">
    <div class="col-6">
    <h1 class="mt-4">Detail <span style="color:purple">Mahasiswa</span> <a href="/students" class="fa fa-home">kembali</a></h1>

 
    <div class="card" style="margin-top:10%;" >
        <div class="card-body">
        <h5 class="card-title">{{ $student->nama }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp}}</h6>
          <p class="card-text">{{ $student->email}}</p>
          <p class="card-text">{{ $student->jurusan}}</p>
          <button type="submit" class="btn btn-primary" style="margin-left:60%">Edit</button>
          <button type="submit" class="btn btn-danger">Delete</button>
          
        </div>
      </div>

    </div>
</div>
</div>
@endsection
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

   