<?php

namespace App\Http\Requests;

use App\Models\Categories;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $id = $this->segment(2);
        return [
            // 'cate_name' => "required|max:20|min:3|unique:$tableName,cate_name",
            'cate_name' => [
                'required', 'max:20', 'min:3',
                Rule::unique($tableName)->ignore($id)
            ],
            'cate_image' => 'nullable'
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
