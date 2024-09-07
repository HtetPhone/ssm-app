<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard ()
    {
        $users = User::all();
        $payments = Payment::all();
        return view('admin.dashboard', compact('payments', 'users'));
    }

    public function index()
    {
        $payments = Payment::latest()->get();
        return view('admin.payment-method', [
            'payments' => $payments
        ]);
    }

    public function store(StorePaymentRequest $request)
    {
        $data = $request->validated();

        //store image
        $data['logo'] = $request->file('logo')->store('payments/logos', 'public');

        Payment::create($data);

        return redirect()->back()->with(['success' => 'New Payment has been added!!']);
    }

    public function detail(Payment $payment)
    {
        return view('admin.details', [
            'payment' => $payment
        ]);
    }

    public function edit(Payment $payment)
    {
        return view('admin.edit', compact('payment'));
    }

    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        $data = $request->validated();

        //for image
        if($request->has('logo')) {
            $data['logo'] = $request->file('logo')->store('payments/logos', 'public');

            //delete the old image
            Storage::disk('public')->delete($payment->logo);
        }

        $payment->update($data);

        return  redirect()->back()->with(['success' => 'Payment Data has been updated!!']);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payment.method')->with(['delete' => 'Successfully Deleted!!']);
    }
}
