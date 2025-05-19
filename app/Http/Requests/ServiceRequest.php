<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            //
            'title' => 'required|string|min:4|max:255',
            'title_ar' => 'required|string|min:4|max:255',
            'description' => 'required|string|min:15|max:255',
            'description_ar' => 'required|string|min:15|max:255',

        ];
    }
    public function attributes()
    {
        return  [
            'title' => __('admin.title'),
            'title_ar' => __('admin.title_ar'),
            'description' => __('admin.description'),
            'description_ar' => __('admin.description_ar'),
        ];
    }
}
