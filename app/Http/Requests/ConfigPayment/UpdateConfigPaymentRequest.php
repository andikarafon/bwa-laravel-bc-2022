<?php

namespace App\Http\Requests\User;

use App\Models\MasterData\ConfigPayment;

//use gate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//untuk update tambahkan rule
use Illuminate\Validation\Rule;

class UpdateConfigPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'fee' => [
                'required', 'string', 'max:255', 
            ],
            'vat' => [
                'required', 'string', 'max:255', 
            ],
        ];

    }
}
