@extends('layouts.app')

@section('breadcrumbs')
    / Tabel Kelas
@endsection

@section('title')
    Data Kelas
@endsection

@section('content')
<section class="section">
    <h5 class="mt-2 mb-4">Data Kelas</h5>
    <div class="card mt-2">
        <div class="card-body">
            <div class="card-title  ">
                <h5>Data Kelas</h5>
                <hr>
                <a class="btn btn-sm btn-primary float-end" href="{{ route('kelas.create')}}"><i class="fa fa-plus"></i></a>
                <form action="/kelas" class="d-flex" role="search" method="GET">
                    <input class="form-control" type="search" name="search" placeholder="Cari Kelas" aria-label="Search" style="width: 200px;">
                    <button class="btn btn-outline-secondary mx-1" type="submit">Cari</button>
                </form>
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
                    @foreach ($kelas as $key => $item)
                    <tr>
                        <th scope="row">{{ $kelas -> firstItem() + $key  }}</th>
                        <td>{{ $item->nama_kelas }}</td>
                        <td>
                            <a href="/kelas/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="/kelas/hapus/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="container" style="width: 100%; bottom: 0px;">
                {{ $kelas->links() }}
            </div>
            
        </div>
    </div>
</section>
@endsection