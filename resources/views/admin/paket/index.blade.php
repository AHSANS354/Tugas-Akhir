@extends('admin.layout.app')
@section('content')
    <!-- DataTales Example -->
    <div class="row card shadow p-4 m-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/dahboard')}}">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Paket</li>
            </ol>
        </nav>
        <h1 align="center">Paket</h1>

        <table class="table align-items-center" id="example">
            <div>
                <a href="{{url('admin/paket/create')}}" class="btn btn-sm btn-info text-uppercase"><i class="fas fa-plus-circle"></i> Tambah</a>
                <a href="{{url('admin/paket/exportPDF')}}" class="btn btn-sm btn-danger text-uppercase"><i class="fas fa-file-pdf"></i> PDF</a>
            </div>
            
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Nama</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Deskripsi</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Harga</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Paket</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($paket as $pkt)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="align-middle text-center">{{$pkt->nama}}</td>
                    <td class="align-middle text-center text-truncate" style="max-width: 10px">{{$pkt->deskripsi}}</td>
                    <td class="align-middle text-center">Rp.{{number_format($pkt->harga,0,',','.')}}</td>
                    <td class="align-middle d-flex justify-content-center gap-4">
                        <a href="{{url('admin/paket/show/'.$pkt->id)}}" class="text-info">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{url('/admin/paket/edit/'.$pkt->id)}}" class="text-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pkt->id}}">
                        <i class="fas fa-trash"></i>
                        </a>
  
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$pkt->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus <strong>{{$pkt->nama}}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="{{url('admin/paket/delete/'.$pkt->id)}}" type="button" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection