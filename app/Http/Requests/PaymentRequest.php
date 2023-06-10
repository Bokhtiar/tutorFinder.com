<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /* Determine if the user is authorized to make this request. */
    public function authorize(): bool
    {
        return true;
    }

    /*  Get the validation rules that apply to the request. */
    public function rules(): array
    {
        return [
            'amount' => 'required',
            'payment_name' => 'required',
            'payment_number' => 'required',
            'transection_id' => 'required',
        ];
    }
}
