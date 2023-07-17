<?php

namespace App\Http\Requests;

use App\Models\Capacities;
use Illuminate\Foundation\Http\FormRequest;

class CapacityRequest extends FormRequest
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
        return [
            'capacity_name' => "required|max:50|unique:$tableName,capacity_name"
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
