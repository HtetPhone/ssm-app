<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $payments = Payment::latest()->get();
        return view('index', [
            'payments' => $payments
        ]);
    }
}
