{{-- HANYA EDIT KATEGORI YANG BISA DIGUNAKAN --}}
@extends('layouts.app')

@section('title')
    Siswa
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Data Siswa</h5>

            <form action="{{route('siswa.update', $siswa->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        {{-- Edit Nama --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Guru</label>
                            <input type="text" name="nama" id="nama" value="{{$siswa->nama}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit Alamat --}}
                        <div class="mt-4 mb-4">
                            <label for="floatingTextarea">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="Alamat">{{$siswa->alamat}}</textarea>
                            @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                        @enderror
                        </div>

                        {{-- Edit Jenis Kelamin --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Jenis Kelamin</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <label for="jenis_kelamin">
                                    {{-- {{$siswa->jenis_kelamin == 'L'? 'checked' : ''}} --}}
                                    {{-- {{$siswa->jenis_kelamin == 'P'? 'checked' : ''}} --}}
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin"  {{$siswa->jenis_kelamin == 'Laki-laki'? 'checked' : ''}}>Laki-Laki
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin"  {{$siswa->jenis_kelamin == 'Perempuan'? 'checked' : ''}}>Perempuan
                                </label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit Kelas ID --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Kelas ID</label>
                            <select type="text" name="kelas_id" id="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                @error('kelas_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    <option value="{{$siswa->kelas_id}}" selected>{{! empty($siswa->kelas->nama_kelas) ?  $siswa->kelas->nama_kelas : ''}}</option>
                                @foreach($kelas as $k)
                                    <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Edit Mapel ID --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Mapel ID</label>
                            <select type="text" name="mapel_id" id="mapel_id" class="form-control @error('mapel_id') is-invalid @enderror">
                                @error('mapel_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    <option value="{{$siswa->mapel_id}}" selected>{{! empty($siswa->mapel->mapel) ?  $siswa->mapel->mapel : ''}}</option>
                                @foreach($mapel as $m)
                                    <option value="{{$m->id}}">{{$m->mapel}}</option>
                                @endforeach
                            </select>
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
</div>
@endsection