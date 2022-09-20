@extends('layouts.app')

@section('title')
    Data Kelas
@endsection

@section('content')
<section class="section">
    <h2 class="my-4">Data Kelas</h2>
    <div class="card mt-2">
        <div class="card-body">
            <div class="card-title  ">
                <a class="btn btn-sm float-end" href="{{ route('kelas.create')}}"><i class="fa fa-plus"></i></a>
                <h5>Data Kelas</h5>
            </div>
        </div>
    
        {{-- Judul Data Kelas --}}
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="50px">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col" width="84px">Action</th>
                    </tr>
                </thead>
        
        {{-- Data Kelas --}}
                <tbody class="table-group-divide">
                    @foreach ($kelas as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_kelas }}</td>
                        <td>
                            <a href="/kelas/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="/kelas/hapus/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection