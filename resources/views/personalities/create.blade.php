@extends('layouts.template')
@section('content')
<!--breadcrumb-->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Dashboard</h5>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active">Default</li>
        </ol>
      </nav>
    </div>
  </div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">Personalities</h6>
<hr>
<div class="card">
    <div class="card-body">
        <form action="{{ route('barangkeluar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Julukan</label>
                <select name="id_barangs" class="form-control">
                    @foreach ( $personalities as $data )
                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                    @endforeach
                </select>
                @error('id_barangs')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invalid @enderror"
                            placeholder="tanggal_keluar">
                        @error('tanggal_keluar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> 
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"
                            placeholder="jumlah">
                        @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <select name="keterangan" class="form-control">
                        <option value=0>Hilang</option>
                        <option value=1>Rusak</option>
                        </select>
                        @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
        </form>
    </div>
    </div>
</div>
@endsection
