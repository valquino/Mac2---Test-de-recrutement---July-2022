<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:3|max:1000',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
            'addresse' => 'nullable|min:3|max:100',
            'postal_code' => 'nullable|numeric|integer|digits:5',
            'city' => 'nullable|min:3|max:100',
        ];
    }
}
