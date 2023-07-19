<?php

namespace App\Http\Requests;

use App\Models\Products;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductResquest extends FormRequest
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
        $tableName = (new Products())->getTable();
        $id = request()->segment('2');
        return [
            'name' => [
                'required', 'max:20','min:3',
                Rule::unique($tableName)->ignore($id)
            ],
            'image' => 'nullable',
            'desc' =>'nullable',
            'cate_id' => 'required'
        ];

    }
    public function message()
    {
        return [
            'name:required' => ':attribute bắt buộc phải nhập',
            'name:max' => ':attribute quá dưới :max kí tự',
            'name:min' => ':attribute không dưới :min kí tự',
            'name:unique' => ':attribute đã tồn tại',
            'cate_id' => ':attribute bắt buộc phải nhập',
        ];
    }
}
