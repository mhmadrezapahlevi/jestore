<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    // Simpan transaksi baru
   public function store(Request $request)
{
    $validated = $request->validate([
        'package_id'     => 'required|exists:packages,id',
        'user_game_id'   => 'required|string|max:50',
        'server_id'      => 'nullable|string|max:50',
        'payment_method' => 'required|string|max:50',
    ]);

    $package = Package::with('game')->findOrFail($validated['package_id']);

    $transaction = Transaction::create([
        'order_id'       => 'JE-' . strtoupper(Str::random(8)),
        'game_id'        => $package->game_id,
        'package_id'     => $package->id,
        'user_id'        => $validated['user_game_id'],  // ← ubah jadi user_id
        'server_id'      => $validated['server_id'] ?? null,
        'payment_method' => $validated['payment_method'],
        'total_price'    => $package->price,  // ← ubah jadi total_price
        'status'         => 'pending',
    ]);

    return response()->json([
        'success'  => true,
        'redirect' => route('transaction.success', $transaction->order_id),
    ]);
}

    // Halaman sukses
    public function success($orderId)
    {
        $transaction = Transaction::with('game', 'package')
            ->where('order_id', $orderId)
            ->firstOrFail();

        return view('transaction.success', compact('transaction'));
    }

    // Halaman form cek transaksi
    public function check()
    {
        return view('transaction.check');
    }

    // Proses lacak pesanan
    public function track(Request $request)
    {
        $request->validate(['order_id' => 'required|string']);

        $transaction = Transaction::with('game', 'package')
            ->where('order_id', $request->order_id)
            ->first();

        return view('transaction.check', compact('transaction'));
    }
}