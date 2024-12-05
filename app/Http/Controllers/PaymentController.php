<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Mendapatkan data order dari database
        $order = Order::find($request->order_id);

        // Parameter yang dikirim ke Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'first_name' => $order->customer->name,
                'email' => $order->customer->email,
                'phone' => $order->customer->phone,
            ],
            'item_details' => [
                [
                    'id' => 'product-' . $order->product_id,
                    'price' => $order->product->price,
                    'quantity' => $order->quantity,
                    'name' => $order->product->name,
                ],
            ],
        ];

        try {
            // Mendapatkan Snap Token dari Midtrans
            $snapToken = Snap::getSnapToken($params);

            // Menampilkan halaman checkout dengan Snap Token
            return view('payment.checkout', ['snapToken' => $snapToken, 'order' => $order]);
        } catch (Exception $e) {
            return back()->with('error', 'Gagal memproses pembayaran: ' . $e->getMessage());
        }
    }

    public function handleNotification(Request $request)
    {
        // Logika untuk menangani notifikasi dari Midtrans
    }
}
