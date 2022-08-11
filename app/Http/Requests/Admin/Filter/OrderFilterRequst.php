<?php

namespace App\Http\Requests\Admin\Filter;

use Illuminate\Foundation\Http\FormRequest;

class OrderFilterRequst extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user' => 'nullable|string',
            'prices' => 'nullable|array',
            'price' => 'nullable|integer',
            'time' => 'nullable|integer'
        ];
    }
}
