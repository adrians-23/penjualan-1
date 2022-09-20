@extends('layouts.app')

@section('title')
    Kelas
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5 class="mt-2">Tambah Data Kelas</h5>
        </div>
            <form action="{{route('kelas.store')}}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">

                        {{-- Add Mapel --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Kelas</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" value="{{ old('nama_kelas')}}" class="form-control @error('nama_kelas') is-invalid @enderror">
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
@endsection