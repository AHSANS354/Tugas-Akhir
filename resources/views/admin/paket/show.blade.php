@extends('admin.layout.app')
@section('content')
@foreach ($paket as $pkt)    
<div class="card shadow p-3 mb-5">
    <h1 class="m-3">User Detail</h1>
    <div class="container mt-3">
        <div class="row m-3">
            <div class="col-6">Id</div>
            <div class="col-6">: {{$pkt->id}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Nama Paket</div>
            <div class="col-6">: {{$pkt->nama}}</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Haircut</div>
            <div class="col-6">: @if($pkt->haircut == 1) Iya @else Tidak @endif</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Keramas</div>
            <div class="col-6">: @if($pkt->keramas == 1) Iya @else Tidak @endif</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Tonic</div>
            <div class="col-6">: @if($pkt->tonic == 1) Iya @else Tidak @endif</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Creambath</div>
            <div class="col-6">: @if($pkt->creambath == 1) Iya @else Tidak @endif</div>
        </div>
        <div class="row m-3">
            <div class="col-6">Harga</div>
            <div class="col-6">: Rp.{{number_format($pkt->harga,0,',','.')}}</div>
        </div>
        <div class="text-center m-5">
            <a href="{{url('admin/paket')}}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endforeach
@endsection