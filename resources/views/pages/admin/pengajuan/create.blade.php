@extends('layouts.admin')
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Pengajuan Pinjaman</h1>
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
                  <form action="{{ route('pengajuan-pinjaman.store') }}" method="post">
                      @csrf
                      <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" name="nama" placeholder="Nama Anggota" value="{{ old('nama') }}">
                      </div>
                      <div class="form-group">
                          <label for="slug">Kode Pinjaman</label>
                            <select name="kode_anggota_id" class="form-control">
                                <option value="">Kode Anggota</option>
                                @foreach ($dataSimpanan as $data)
                                    <option value="{{ $data->kode_anggota }}">
                                        {{ $data->kode_anggota }}
                                    </option>
                                @endforeach
                            </select>
                      </div>
                      <div class="form-group">
                          <label for="jenis_pinjaman">Jenis Pinjaman</label>
                          <input type="text" class="form-control" name="jenis_pinjaman" placeholder="Jenis Pinjaman" value="{{ old('jenis_pinjaman') }}">
                      </div>
                      <div class="form-group">
                          <label for="lama_pinjam">Lama Pinjam</label>
                          <input type="text" class="form-control" name="lama_pinjam" placeholder="Lama Pinjam" value="{{ old('lama_pinjam') }}">
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