<?php

namespace App\Http\Requests\User;

use App\Models\MasterData\Specialist;

//use gate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//untuk update tambahkan rule
use Illuminate\Validation\Rule;

class UpdateSpecialistRequest extends FormRequest
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
            'name' => [
                'required', 'string', 'max:255', 
            ],
            'price' => [
                'required', 'string', 'max:255', 
            ],
        ];
    }
}
