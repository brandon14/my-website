<?php

namespace App\Http\Requests;

use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

class SendContactEmail extends FormRequest
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
            'g-recaptcha-response' => ['bail', 'required', new CaptchaRule],
            'name'                 => 'bail|required|string',
            'email'                => 'bail|required|email',
            'message'              => 'required|string',
        ];
    }
}
