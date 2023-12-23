@extends('halaman.app')
@section('front')

<div class="container py-5 my-5">
    <div class="card mt-5">
      <div class="card-body">
          <h5 class="mb-3">
              Semua Transaksi
          </h5>
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Tanggal Transaksi</th>
                      <th>Tanggal Booking</th>
                      <th>Harga</th>
                      <th>Status Pembayaran</th>
                      <th>Aksi</th>
                  </tr>
              </thead>

              <tbody>
                  @foreach ($booking as $item)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->tgl_booking }}</td>
                      <td>{{ $item->jam }}</td>
                      <td>Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                      <td>
                          @if ($item->status_bayar === 'Belum Bayar')
                          <span class="badge bg-warning rounded">{{ $item->status_bayar }}</span>
                          @else
                          <span class="badge bg-success rounded">{{ $item->status_bayar }}</span>
                          @endif
                      </td>
                      <td>
                        @if($item->status_bayar === 'Belum Bayar')
                        <a class="btn btn-sm btn-info" href="{{url('checkout/'.$item->id)}}">Bayar</a>
                        @endif
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <td colspan="5" class="text-right">
              <a href="{{ url('/') }}" class="btn btn-secondary"><i class="fa fa-angle-left"></i> Back to Home</a>
          </td>
      </div>
    </div>
</div>
@endsection