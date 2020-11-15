<?php

namespace App\Http\Requests\User\transaction;

use Illuminate\Foundation\Http\FormRequest;

class AddTransactionRequest extends FormRequest
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
            // "user_cate" => "required",
            "balance" => "required",
            "total_income" => "required",
            "total_expenses" => "required",
            "note" => "required"
            
        ];
    }
}
