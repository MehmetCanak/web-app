<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Validation\Validator ;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    public function messages()
    {
        return [
            'email.required' => 'Email alani doldurulmalidir. ',
            'password.required' => 'Sifre alani doldurulmalidir.',
            'email.email' => 'E-posta gecerli bir e-posta adresi olmalidir.',
        ];
    }
    // protected function validationData()
    // {
    //     return $this->get('user') ?: [];
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $response = [
            'success' => false,
            'message' => ['errors' =>$validator->errors()->all()]
        ];
        throw new HttpResponseException(
            response()->json($response, 400) //'message' => $validator->messages(),
        );
    }
}
