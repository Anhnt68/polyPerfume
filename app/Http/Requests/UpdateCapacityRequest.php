<?php

namespace App\Http\Requests;

use App\Models\Capacities;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCapacityRequest extends FormRequest
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
        $tableName = (new Capacities())->getTable();
        $id = $this->segment(2);
        return [
            // 'cate_name' => "required|max:20|min:3|unique:$tableName,cate_name",
            'capacity_name' => [
                'required', 'max:20',
                Rule::unique($tableName)->ignore($id)
            ],
        ];
    }
    public function message()
    {
        return [
            'capacity_name:required' => ':attribute bắt buộc phải nhập',
            'capacity_name:max' => ':attribute quá dưới :max kí tự',
            'capacity_name:unique' => ':attribute đã tồn tại',
        ];
    }
}
