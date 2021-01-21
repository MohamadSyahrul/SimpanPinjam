@extends('layouts.admin')
@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Pengajuan Pinjaman</h1>
                            <a href="{{route('pengajuan-pinjaman.create')}}" class="btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text white-50"></i>Tambah Data Anggota
                            </a>
                        </div> 
                    </div>
                    <!-- /.container-fluid -->
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" collspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Kode Anggota</th>
                                            <th>Jenis Pinjaman</th>
                                            <th>Lama Pinjaman</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)                                            
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->kode_anggota_id}}</td>
                                            <td>{{$item->jenis_pinjaman}}</td>
                                            <td>{{$item->lama_pinjam}}</td>
                                            <td>
                                                <a href="{{route('pengajuan-pinjaman.edit',$item->id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('pengajuan-pinjaman.destroy',$item->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="10" class="text-center">
                                                Data Kosong
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection