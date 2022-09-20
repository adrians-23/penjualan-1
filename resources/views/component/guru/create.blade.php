@extends('layouts.app')

@section('title')
    Guru
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5 class="mt-2">Tambah Data Guru</h5>
        </div>
            <form action="{{route('guru.store')}}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">

                        {{-- Add Nama --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        {{-- Add Alamat --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="floatingTextarea">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="Alamat"></textarea>
                            @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        {{-- Add Jenis Kelamin --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Jenis Kelamin</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <label for="jenis_kelamin">
                                    {{-- {{$siswa->jenis_kelamin == 'L'? 'checked' : ''}} --}}
                                    {{-- {{$siswa->jenis_kelamin == 'P'? 'checked' : ''}} --}}
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin"  >Laki-Laki
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin"  >Perempuan
                                </label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Mapel ID --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Mapel ID</label>
                            <select name="mapel_id" id="mapel_id" value="{{ old('mapel_id')}}" class="form-control @error('mapel_id') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($mapel_id as $mid)
                                    <option value="{{$mid->id}}">{{$mid->mapel}}</option>
                                @endforeach
                            </select>
                            @error('mapel_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/guru" role="button">Batal</a>
                    ‎      ‎
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                
            </form>
    </div>
</div>
@endsection