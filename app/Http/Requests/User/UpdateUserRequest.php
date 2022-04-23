<?php

namespace App\Http\Requests\User;

use App\Models\User;

use Gate;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


//untuk update tambahkan rule jika ada yang unique
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        //create middleware from kernel at here
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
                'required', 'string','max:255',
            ],
            'email' => [
                'required', 'email', 'max:255',  Rule::unique('users')->ignore($this->user), //rule works only for other record id
            ],
            //add validation for role this here
        ];
    }
}
