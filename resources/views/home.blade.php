@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $siswa }}</h3>
    
                    <p>Total Siswa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cube"></i>
                </div>
                <a href="/siswa" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
    </div>
@endsection