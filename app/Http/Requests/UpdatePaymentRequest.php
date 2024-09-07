<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'payment_name' => 'min:2',
            'logo' => [File::image()->max(12 * 1024), 'mimes:png,jpg,jpeg,svg,webp'],
            'acc_name' => 'min:2',
            'acc_no' => 'min:3',
        ];
    }
}
