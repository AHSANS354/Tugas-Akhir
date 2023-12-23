<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Capster;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index() 
    {
        $userId = auth()->user()->id;

        $booking = Booking::where('user_id', $userId)
            ->join('paket', 'paket_id', '=', 'paket.id')
            ->select('booking.*', 'paket.harga as harga')
            ->get();

        return view('transaksi', compact('booking'));
    }


    public function pesanan($id)
    {
        $paket = Paket::where('id', $id)->first();
        $capster = Capster::all();
        $id = $id;
        return view('pesanan', ['paket' => $paket, 'capster'=> $capster, 'id'=>$id]);
    }
    public function pesanan_store(Request $request, $paket){
        $request->validate([
            'tgl_booking' => 'required',
            'jam' => 'required',
            'capster' => 'required',
        ],[
            'tgl_booking.required' => 'Tanggal Booking Wajib di isi',
            'jam.required' => 'Jam Booking Wajib di isi',
            'capster.required' => 'Capster Wajib di isi',
        ]);

        $pakets = Paket::where('id', $paket)->first();

        $booking = Booking::create([
            'user_id'=> auth()->user()->id,
            'tgl_transaksi'=>now(),
            'tgl_booking'=>$request->tgl_booking,
            'jam'=>$request->jam,
            'capster_id'=> $request->capster,
            'paket_id'=>$pakets->id,
            'status_bayar'=>'Belum Bayar'
        ]);

         // setup midtrans
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $pakets->harga,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->customer->no_telp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);

        Booking::where('id', $booking->id)->update([
            'snaptoken' => $snapToken
        ]);
        return redirect('/booking');
    }
    public function checkout($id)
    {
        $booking = Booking::with(['paket', 'capster'])
        ->where('id', $id)
        ->get()->first();

        return view('checkout', compact('booking'));
    }

    public function success(Booking $booking)
    {
        $booking->status_bayar = 'Sudah Dibayar';
        $booking->save();

        return view('success');
    }
}
