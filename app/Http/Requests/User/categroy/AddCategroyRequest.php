<?php

namespace App\Http\Requests\User\categroy;

use Illuminate\Foundation\Http\FormRequest;

class AddCategroyRequest extends FormRequest
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
            "name" => "required",
            "income" => "required",
            "expenses" => "required"
        ];
    }
}
