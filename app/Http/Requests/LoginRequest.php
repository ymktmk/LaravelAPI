<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class LoginRequest extends FormRequest
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
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ];
    }

    // 必要かどうかはわからないけど取り敢えずバリデーション
    protected function failedValidation(Validator $validator) 
    {
        $res = response()->json([
            'status' => 400,
            'errors' => $validator->errors(),
        ], 400);
        throw new HttpResponseException($res);
    }

    // emailとpasswordがあっているか検証する
    public function withValidator(Validator $validator) {
        $validator->after(function ($validator) {
            $credentials = $this->only('email', 'password');
            if (!Auth::attempt($credentials)) {
                $validator->errors()->add('email or password', 'Your email address or password is incorrect.');
            }
        });
    }

}
