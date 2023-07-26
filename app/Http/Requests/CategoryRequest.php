<?php

namespace App\Http\Requests;

use App\Models\Categories;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $tableName = (new Categories())->getTable();
        return [
            'cate_name' => "required|max:20|min:3|unique:$tableName,cate_name," . $this->id,
            'cate_image' => 'nullable|required'
        ];
    }

    public function message()
    {
        return [
            'cate_name:required' => ':attribute bắt buộc phải nhập',
            'cate_name:max' => ':attribute quá dưới :max kí tự',
            'cate_name:min' => ':attribute không dưới :min kí tự',
            'cate_name:unique' => ':attribute đã tồn tại',
        ];
    }
}
