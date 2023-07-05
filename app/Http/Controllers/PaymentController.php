<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Services\PaymentService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            if (Auth::user()->role_id == 2) {
                $payments = PaymentService::findAllTutorRequest();
            } elseif (Auth::user()->role_id == 3) {
                $payments = PaymentService::findAllTutorRequestSend(); 
            } else {
                $payments = PaymentService::findAll();
            }
            return view('modules.payment.index', compact('payments'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request, $id)
    {
        try {
            PaymentService::storeResource($request, $id);
            return redirect('dashboard');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
