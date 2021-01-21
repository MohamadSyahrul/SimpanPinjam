@extends('layouts.admin')
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Data Pinjaman</h1>
        </div>
  
        <!-- Content Row -->
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="card shadow">
              <div class="card-body">
                  <form action="{{ route('data-anggota.store') }}" method="post">
                      @csrf
                      <div class="form-group">
                          <label for="nama_anggota">Nama Anggota</label>
                          <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Anggota" value="{{ old('nama_anggota') }}">
                      </div>
                      <div class="form-group">
                          <label for="slug">Kode Pinjaman</label>
                          <input type="text" class="form-control" name="kode_anggota" placeholder="Kode Pinjaman" value="{{ old('kode_anggota') }}">
                      </div>
                      <div class="form-group">
                          <label for="NIK">NIK</label>
                          <input type="number" class="form-control" name="NIK" placeholder="NIK" value="{{ old('NIK') }}">
                      </div>
                      <div class="form-group">
                          <label for="ttl">Tempat Tanggal Lahir</label>
                          <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir" value="{{ old('ttl') }}">
                      </div>
                      <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ old('jenis_kelamin') }}">
                      </div>
                      <div class="form-group">
                          <label for="pekerjaan">Pekerjaan</label>
                          <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="{{ old('pekerjaan') }}">
                      </div>
                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                      </div>
                      <div class="form-group">
                          <label for="nomor_tlp">Nomor Telp</label>
                          <input type="number" class="form-control" name="nomor_tlp" placeholder="Nomor Telp" value="{{ old('nomor_tlp') }}">
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">
                          Simpan
                      </button>
                  </form>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->
@endsection