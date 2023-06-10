<?php

namespace App\Services;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Payment::latest()->get();
    }

    /* fild resoruce */
    public static function fildResource($request, $id)
    {

        return array(
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'tutor_id' => $id,
            'payment_name' => $request->payment_name,
            'payment_number' => $request->payment_number,
            'transection_id' => $request->transection_id,
        );
    }

    /* store new resoruce */
    public static function storeResource($request, $id)
    {
        return Payment::create(PaymentService::fildResource($request, $id));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Payment::find($id);
    }
}
