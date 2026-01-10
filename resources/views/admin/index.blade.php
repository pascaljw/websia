@extends('layout.admin.index')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Dashboard Sistem Informasi Akuntansi D3</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="job-icon pb-4 d-flex justify-content-between">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="mb-0">{{ $mahasiswaCount }}</h2>
                                </div>	
                                <span class="fs-14 d-block mb-2">Jumlah Mahasiswa</span>
                            </div>	
                            <div id="mahasiswa-icon">
                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="job-icon pb-4 d-flex justify-content-between">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="mb-0">{{ $dosenCount }}</h2>
                                </div>	
                                <span class="fs-14 d-block mb-2">Jumlah Dosen</span>
                            </div>	
                            <div id="dosen-icon">
                                <i class="fas fa-chalkboard-teacher fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="job-icon pb-4 d-flex justify-content-between">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <h2 class="mb-0">{{ $tugasAkhirCount }}</h2>
                                </div>	
                                <span class="fs-14 d-block mb-2">Jumlah Tugas Akhir</span>
                            </div>	
                            <div id="tugasakhir-icon">
                                <i class="fas fa-book fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Auth::user()->isSuperAdmin())
<div class="row mt-4">
    <div class="col-xl-12">
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Manage Users</a>
        <a href="{{ route('admin.permissions.index') }}" class="btn btn-secondary">Manage Permissions</a>
    </div>
</div>
@endif
@endsection