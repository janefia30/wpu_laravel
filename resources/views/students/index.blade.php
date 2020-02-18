@extends('layout/main')

@section('title','mahasiswa')

@section('container')
<div class="container">
<div class="row">
    <div class="col-6">
    <h1 class="mt-3">Detail mahasiswa</h1>

    <a href="/students/create" class="btn btn-primary my-3">Tambahkan Data Mahasiswa</a>
    
    @foreach ($students as $student)
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $student->nama }}
            
        <a href="/students/{{ $student->id }}" class="badge badge-info"> detail </a>
        </li>
    @endforeach
    </ul>

    </div>
</div>
</div>
@endsection

   