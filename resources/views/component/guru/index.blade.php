@extends('layouts.app')

@section('title')
    Data Guru
@endsection

@section('content')
<section class="section">
    <h2 class="my-4">Data Guru</h2>
    <div class="card mt-2">
        <div class="card-body">
            <div class="card-title  ">
                <a class="btn btn-sm float-end" href="{{ route('guru.create')}}"><i class="fa fa-plus"></i></a>
                <h5>Data Guru</h5>
            </div>
        </div>
    
        {{-- Judul Data Guru --}}
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="50px">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Mapel ID</th>
                        <th scope="col" width="84px">Action</th>
                    </tr>
                </thead>
        
        {{-- Data Guru --}}
                <tbody class="table-group-divide">
                    @foreach ($guru as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->mapel->mapel }}</td>
                        <td>
                            <a href="/guru/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection