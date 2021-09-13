<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;


class StorePostRequest extends FormRequest
{
    //protected $stopOnFirstFailure = true;
    //protected $redirect = '/dashboard';
    //protected $redirectRoute = 'dashboard';
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
            'name' => 'required|max:255',
            'email' => 'required',
            'slug' => 'required',
        ];
    }

    // public function withValidator($validator)
    // {
    //     $validator->after(function ($validator) {
    //         if ($this->somethingElseIsInvalid()) {
    //             $validator->errors()->add('field', 'Something is wrong with this field!');
    //         }
    //     });
    // }
    public function attributes()
    {
        return [
            'email' => 'Email',
            'name' => 'Ad',
            'slug' => 'SLUG'
        ];
    }


/**
 * Prepare the data for validation.
 *
 * @return void
 */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }
}
