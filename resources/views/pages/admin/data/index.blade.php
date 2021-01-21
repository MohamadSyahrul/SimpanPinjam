@extends('layouts.admin')
@section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Data Anggota</h1>
                            <a href="{{route('data-anggota.create')}}" class="btn btn-sm btn-primary shadow-sm">
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
                                            <th>Nama Anggota</th>
                                            <th>Kode Anggota</th>
                                            <th>NIK</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                            <th>Nomor Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)                                            
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->nama_anggota}}</td>
                                            <td>{{$item->kode_anggota}}</td>
                                            <td>{{$item->NIK}}</td>
                                            <td>{{$item->ttl}}</td>
                                            <td>{{$item->jenis_kelamin}}</td>
                                            <td>{{$item->pekerjaan}}</td>
                                            <td>{{$item->alamat}}</td>
                                            <td>{{$item->nomor_tlp }}</td>
                                            <td>
                                                <a href="{{route('data-anggota.edit',$item->id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('data-anggota.destroy',$item->id)}}" method="POST" class="d-inline">
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