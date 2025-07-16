<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequestRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customer_requests,email',
            'phone_number' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
            'start_date' => 'required|date',
            'nice_to_have' => 'nullable|string',
            'payment_method_id' => 'required|exists:payment_methods,id',
            'message' => 'nullable|string',
        ];
    }
}
