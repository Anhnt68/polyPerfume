<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $tableName = (new User())->getTable();
        return [
            'name' => "required|max:50|unique:$tableName,name",
            'email'=> "required|regex:/^.+@.+$/i|unique:$tableName,email",
            'password' => "required",
            'address' => "required",
            'phone' => "required|unique:$tableName|max:10",
            'role' => 'required'
        ];
    }
    public function message()
    {
        return [
            'name:required' => ':attribute bắt buộc phải nhập',
            'name:max' => ':attribute quá dưới :max kí tự',
            'name:unique' => ':attribute đã tồn tại',
            'email:required' =>':attribute bắt buộc phải nhập',
            'email:regex:/^.+@.+$/i' => ':attribute đúng định dạng enail',
            'email:unique' => ':attribute đã tồn tại',
            'password:required' => ':attribute bắt buộc phải nhập',
            'address:required' => ':attribute bắt buộc phải nhập',
            'phone:required' => ':attribute bắt buộc phải nhập',
            'phone:max' => ':attribute quá dưới :max kí tự',
            'role:required' => ':attribute bắt buộc phải nhập',

        ];
    }
}
