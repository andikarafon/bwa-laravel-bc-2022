<?php

namespace App\Http\Requests\User;

use App\Models\ManagementAccess\Role;

//use gate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//untuk update tambahkan rule
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
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
            'title' => [
                'required', 'string', 'max:255', 
            ],
        ];

    }
}
