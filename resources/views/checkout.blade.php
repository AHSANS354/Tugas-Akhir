@extends('halaman.app')

@section('front')
<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>

    <div class="my-5 py-5 login">
            <div class="row justify-content-center m-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 border-bottom">
                                <h4 align="center">Pesanan</h4>
                            </div>

                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Tanggal</span>
                                </div>
                                <div class="col-6">
                                    <h6>{{ $booking->tgl_booking }}</h6>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Jam</span>
                                </div>
                                <div class="col-6">
                                    <h6>{{ $booking->jam }}</h6>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Capster</span>
                                </div>
                                <div class="col-6">
                                    <h6>{{ $booking->capster->nama }}</h6>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Paket</span>
                                </div>
                                <div class="col-6">
                                    <h6>{{ $booking->paket->nama }}</h6>
                                </div>
                            </div>
                            
                            <div class="row py-2">
                                <div class="col-5">
                                    <span>Harga</span>
                                </div>
                                <div class="col-6">
                                    <h6>Rp. {{ number_format($booking->paket->harga,0,',','.') }}</h6>
                                </div>
                            </div>

                            <div class="d-flex flex-column mt-3">
                                <button class="btn btn-primary mb-3" type="submit" id="pay-button">
                                    Bayar
                                </button>
                                <a class="btn btn-outline-primary" href="{{url('/booking')}}">
                                    Batal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$booking->snaptoken}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              window.location.href = '{{url('success', ['id' => $booking->id])}}';
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
@endsection
