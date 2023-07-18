<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'quantity' => "required",
            'price' => 'required',
            'product_id' => 'required',
            'capacity_id' => 'required',
        ];
    }
    public function message()
    {
        return [
            'quantity:required' => ':attribute bắt buộc phải nhập',
            'quantity:numberic' => ':attribute bắt buộc phải là số',
            'price:required' => ':attribute bắt buộc phải nhập',
            'quantity:numberic' => ':attribute bắt buộc phải là số',
            'product_id:required' => ':attribute bắt buộc phải nhập',
            'capacity_id:required' => ':attribute bắt buộc phải nhập',
        ];
    }
}
