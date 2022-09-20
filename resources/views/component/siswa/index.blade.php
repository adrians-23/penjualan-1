@extends('layouts.app')

@section('title')
    Data Siswa
@endsection

@section('content')
<section class="section">
    <h2 class="my-4">Data Siswa</h2>
    <div class="card mt-2">
        <div class="card-body">
            <div class="card-title  ">
                <a class="btn btn-sm float-end" href="#"><i class="fa fa-plus"></i></a>
                <h5>Data Siswa</h5>
            </div>
        </div>
    
        {{-- Judul Data Siswa --}}
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="50px">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Kelas ID</th>
                        <th scope="col">Mapel ID</th>
                        <th scope="col" width="84px">Action</th>
                    </tr>
                </thead>
        
        {{-- Data Siswa --}}
                <tbody class="table-group-divide">
                    {{-- @foreach () --}}
                    <tr>
                        <th scope="row">1</th>
                        <td>Lorem</td>
                        <td>Jakarta</td>
                        <td>Laki-laki</td>
                        <td>XII RPL-1</td>
                        <td>Bahasa Inggris</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection