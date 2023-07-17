<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $tableName = (new User())->getTable();
        $id = $this->segment(2);
        return [
            'name' => ['required','max:50', Rule::unique($tableName)->ignore($id)],
            'email'=> ['required', 'regex:/^.+@.+$/i',Rule::unique($tableName)->ignore($id)],
            'password' => ['required'],
            'address' => ['required'],
            'phone' => ['required',Rule::unique($tableName)->ignore($id),'max:10'],
            'role' => ['required'],
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
