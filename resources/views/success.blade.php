@extends('halaman.app')
@section('front')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center m-5">
            <div class="col-md-4">
                <div class="card bg-success text-white text-center p-5 shadow">
                    {{-- sukses pembayaran --}}
                    <h1 class="text-white">Pembayaran Success!</h1>
                    <i class="far fa-thumbs-up"></i>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5 p-5 shadow">
                    <div class="row">
                        <div class="col">
                            <h3 align="center">Pemberitahuan!</h3>
                        </div>
                    </div>
                    <div class="row">
                        <ul>
                            <li>Maksimal telat 15 menit, jika melebihi akan dianggap batal.</li>
                            <li>Batal/reschedule hubungi +62 821-3759-5185 maksimal 3 jam sebelum jadwal bookingnya.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection