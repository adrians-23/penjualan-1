{{-- HANYA EDIT KATEGORI YANG BISA DIGUNAKAN --}}
@extends('layouts.app')

@section('title')
    Kelas
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Data Kelas</h5>

            <form action="{{route('kelas.update', $kelas->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        {{-- Edit Nama --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Kelas</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" value="{{$kelas->nama_kelas}}" class="form-control @error('nama_kelas') is-invalid @enderror">
                            @error('nama_kelas')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                    </div>
                </div>

                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/kelas" role="button">Batal</a>
                    ‎      ‎
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection