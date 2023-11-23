<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
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
        return [
            //
            'username' => "required |string",
            'email' => "required |string|email",
            'password' => "required |string|regex:/[a-zA-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/",
            'role' => "required|in:Super Admin,Admin,HR'",
        ];
    }

    public function failedValidation(Validator $validator) 
    {
        throw new HttpResponseException(
            response()->json([
                'status' => Response::HTTP_BAD_REQUEST,
                'message' => 'Validation errors, please check your input',
                'errors' => $validator->errors(),
            ])
        );
    }
}

