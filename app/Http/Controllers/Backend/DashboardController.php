<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTransactions = Transaction::count();
        $pendingTransactions = Transaction::where('status', 'pending')->count();
        $failedTransactions = Transaction::where('status', 'failed')->count();
        $successTransactions = Transaction::where('status', 'success')->count();
        $totalPrice = Transaction::sum('amount');
        $latestTransactions = Transaction::orderBy('created_at', 'desc')->take(5)->get();

        return view('backend.dashboard.index', compact(
            'totalTransactions',
            'pendingTransactions',
            'failedTransactions',
            'successTransactions',
            'totalPrice',
            'latestTransactions'
        ));
    }
}
