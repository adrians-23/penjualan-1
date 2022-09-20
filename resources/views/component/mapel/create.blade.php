@extends('layouts.app')

@section('title')
    Mapel
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5 class="mt-2">Tambah Data Mapel</h5>
        </div>
            <form action="{{route('mapel.store')}}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">

                        {{-- Add Mapel --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Mapel</label>
                            <input type="text" name="mapel" id="mapel" value="{{ old('mapel')}}" class="form-control @error('mapel') is-invalid @enderror">
                            @error('mapel')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/mapel" role="button">Batal</a>
                    ‎      ‎
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                
            </form>
    </div>
</div>
@endsection